document.addEventListener('alpine:init', () => {
	Alpine.directive('format', (el, { modifiers, expression }, { evaluateLater, effect }) => {
		let elText = evaluateLater(expression)
		if (modifiers.includes("number")){
			
		 
			effect(() => {
				elText(data => {
					if (data != undefined){
						el.textContent = formatNumber(data);
						//el.dispatchEvent(new CustomEvent('input',{detail:formatNumber(data)}));
					}
				})
			})
		}
		
		if (modifiers.includes("date")){
			effect(() => {
				elText(data => {
					if (data != undefined){
						el.textContent = moment(data).format("DD MMM YYYY");
						//el.dispatchEvent(new CustomEvent('input',{detail:formatNumber(data)}));
					}
				})
			})
		}
	})
	
	Alpine.directive('onselect2', (el,{ modifiers } ) => {
		
		$(el).on('select2:select',(e) => {
			let eventName = 'change';
			el.dispatchEvent(new CustomEvent(eventName,{ detail: e.target.value, bubbles: true }));
			if (modifiers.length > 0) {
				eventName = modifiers[0];
				el.dispatchEvent(new CustomEvent(eventName,{ detail: e.target.value, bubbles: true }));
			}
		})
	});
	
	Alpine.directive('ondatepick', (el,{ modifiers } ) => {
		
		$(el).on('change.datetimepicker',(e) => {
			let eventName = 'input';
			
			e.target.children[0].dispatchEvent(new CustomEvent(eventName,{ detail: e.date.format("YYYY-MM-DD"), bubbles: true }));
			if (modifiers.length > 0) {
				eventName = modifiers[0];
				e.target.children[0].dispatchEvent(new CustomEvent(eventName,{ detail: e.date.format("YYYY-MM-DD"), bubbles: true }));
			}
		})
	});

	Alpine.directive('ontimepick', (el,{ modifiers } ) => {
		
		$(el).on('change.datetimepicker',(e) => {
			let eventName = 'input';
			
			e.target.children[0].dispatchEvent(new CustomEvent(eventName,{ detail: e.date.format("HHmm"), bubbles: true }));
			if (modifiers.length > 0) {
				eventName = modifiers[0];
				e.target.children[0].dispatchEvent(new CustomEvent(eventName,{ detail: e.date.format("HHmm"), bubbles: true }));
			}
		})
	});
	
	Alpine.directive('onmonthpick', (el,{ modifiers } ) => {
		
		$(el).on('change.datetimepicker',(e) => {
			let eventName = 'input';
			
			e.target.children[0].dispatchEvent(new CustomEvent(eventName,{ detail: e.date.format("YYYY-MM"), bubbles: true }));
			if (modifiers.length > 0) {
				eventName = modifiers[0];
				e.target.children[0].dispatchEvent(new CustomEvent(eventName,{ detail: e.date.format("YYYY-MM"), bubbles: true }));
			}
		})
	});
	
	Alpine.magic('selectData', (el) => {
		return attr => el.options[el.selectedIndex].getAttribute("data-"+attr)
	});
	
	Alpine.magic('attrData', (el) => {
		return attr => el.getAttribute("data-"+attr)
	});
	
	
	
});