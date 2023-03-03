<style>
  .footers {
    height: 3.125rem;
    width: 100%;
    z-index: 900;
    position: fixed;
    bottom: 0;
    left: 0;
  }
  .text-footer {
    font-size: 13px;
    color: #333;
    font-family: fantasy;
  }
  a {
    text-decoration: none;
  }
</style>
<div class="text-white footers">
  <div class="row "> 
      <a href="/" class="col-3 text-center">
        <div>
          <img width="22" height="22" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo5QTQ2N0Q3RTIzMTgxMUU5OEZGQThENTVFN0FBRTAxRSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo5QTQ2N0Q3RjIzMTgxMUU5OEZGQThENTVFN0FBRTAxRSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjlBNDY3RDdDMjMxODExRTk4RkZBOEQ1NUU3QUFFMDFFIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjlBNDY3RDdEMjMxODExRTk4RkZBOEQ1NUU3QUFFMDFFIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+47AwowAABhtJREFUeNrsWWlsVFUU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">
        </div>  
        <p>
          <span class="text-footer">Trang đầu</span>
        </p>
      </a>
      <a href="#" class="col-3 text-center">
        <div>
          <img width="22" height="22" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyMEIwMUYxQTIzMTkxMUU5ODlCMEQzMkJCMUE4NjFDMSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyMEIwMUYxQjIzMTkxMUU5ODlCMEQzMkJCMUE4NjFDMSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjIwQjAxRjE4MjMxOTExRTk4OUIwRDMyQkIxQTg2MUMxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjIwQjAxRjE5MjMxOTExRTk4OUIwRDMyQkIxQTg2MUMxIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+S3SrYAAAC5pJREFUeNrEmQlQVdcZ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">  
        </div>  
        <p>
          <span class="text-footer">Ghi chép</span>
        </p>
      </a>
      <a href="#" class="col-3 text-center">
        <div>
          <img width="22" height="22" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpGRjIzNjhCMDIzMTgxMUU5OUVCOUY5NjZFRDM2RjRFMyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpGRjIzNjhCMTIzMTgxMUU5OUVCOUY5NjZFRDM2RjRFMyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkZGMjM2OEFFMjMxODExRTk5RUI5Rjk2NkVEMzZGNEUzIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkZGMjM2OEFGMjMxODExRTk5RUI5Rjk2NkVEMzZGNEUzIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+PrCpPAAAA6dJREFUeNrsmWlIVFEUx586LbQYge2BEbRCK2RlkH1pwTbMKQIr2ksK2jM/lAVR2iZEhRRloBVGmZUhLVBGGa1kEkURLdhCJWa0SJNO/xP/R5fHiE9n3nMezYGf7977ZvScc+8995xrmNfr1Zws4ZrDJWRAyID/3QCX2+2WZ2eQDhJBmyDX+SsoACnggws/uoISEO0Qp0eCOSAOxIoBmVReDoQtNCaYJRZsos6ZLi4bkQ1ghwNm4DL4QV0TZRNH8MUpB+3dAj4jwn1EpCTQJ0gVnwG6gPe+wug7MBzkgjtgYhAp3gpkgTxwFnQCNUYDZBP3UHZ6ITggobaJlR8HHoIlyphEzt9GA6Jp4RjwhGPJoJRjtp9RYB+4CHpxTBwaA56BFkYD9HYxGMopE+kPrjLE2iUTQBlYxv5zMFbpR/naA7VKu5ren8y9oTH2yt4YYrHX94Ai0JdjWXToFeVzNWZzoUIqnMP+MHAbrLJorZcpv/sliKcjv/mTzH3k0T0ffAHNFC/1DIDiLUEG17ru9f10XFEgs9FsMAhcUNapRIfVfigvweEBWM/+a5AAloMqK9LpN2ASZ6MCtAW7wUlmtGZFIshOBod+4CfYBQYqp6yl9UC2upEg0xlup5n47ihwF6xVxirBOqbKthQ090FH8JkzoLF/GhziyWmUMHr9BhjAsTPAw4Mpx66KLJNhTWQpPSlefcSxhVzXcYYU+J7idVmKUzhjaRybxaVpqQES1layfYQe11hDDAZ72Zdk8BpI5Qa9qRidy2Bwnv3tSg1yGPS2yoAoblb9ZFxgeC+51AowntFEZBtDpMYMUiLMbIZjVWQ2vrN9zioDJDq0Vv5gXXKJMTxXGdO9XleEkYg2U5m9g4E2II3rXGQxeFrP5yvp6WRmkdL+ZOLU15fgIuAOlAGjwWa2TzDKmJWshniTS7CU7WOgu78GRCql5isw14ZMNIGhtbkSJBptwHHQgW0p/n/ZYIAkcfPYjuF9VaMMSFXKyjWM7XaJLJ+jbKewFmiwASWsBUqYfdotEqZfsJ2nlLumDShmchXfRLWwFFhT2W7PcrLBe6DCbFprkTwGG/lMD2QyZ6dsZfJ33akG6GlKvZu4RnOO+CzqPQ4ywKMaUKscVE4RXddauYfJZ+KUwRuCW0Gu/Ejt3yVbvov3MDLYjTveKfJWdJclVA5GMO+pdoDi1dRVnF6u3zyLEUlMX9sFuQFV1PevGK/Oy9WXTpDQP7pDBvgpfwQYAK6mw2T9Vr2CAAAAAElFTkSuQmCC">        </div>  
        <p>
          <span class="text-footer">Thông tin</span>
        </p>
      </a>
      <a href="{{ route('user.info')}}" class="col-3 text-center">
        <div>
          <img width="22" height="22" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDozRUQwQjk4RDIzMTkxMUU5OEMyQUEyQUM2OTFEMTZFNiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDozRUQwQjk4RTIzMTkxMUU5OEMyQUEyQUM2OTFEMTZFNiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjNFRDBCOThCMjMxOTExRTk4QzJBQTJBQzY5MUQxNkU2IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjNFRDBCOThDMjMxOTExRTk4QzJBQTJBQzY5MUQxNkU2Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+COinqAAABVdJREFUeNrUWWlsFVUUntf2VdxASKEVDWUHYwA3MLigIBBEAkIL4oJBJCQYlbgFNS4oMegfF1RaAogbhEUKYQkgaixxN6AUF5REDSIRrBi1KtqW8Tv2u+b0+rbO3BnqSb68M3fmzbvfveee7SV83/f+z1JQXl7u8n39gLOBgUBXoCOQAOqAA8Bu4B3gI+A3JwQcvEMmeC0wBhgNnJzDd94F1gPLgX1hfjwv5OQncjVfAq7KcfIig4F5wCfAo0C7uHfgRGAxMNkaPwzsAKqBL4BDQCPQFigFLqJ59ebzQng23zMdeC0OAgOANUAPNfYpUAlU0dbTSSU/rwBuBMbzWshtA2aqZyIxobP4Q2by9cA9QH/gmSyT17IJmABcTjMyUsEdiYRAB2ArPYsxl+G04aMBTXELcA7wihqT910dBYG1QCfq33M3tjvwYvV0Bi+rsWVAL5cEZgBDqP/Brf/WcUyaohZEXPNzrgicQpdn5E7g44gC6yTgF+risca5IDCN9u/RRS6IMDM4CMxR1/e5IHCd0h+OIb2p4BkTOQ8YFIbAmcxtPIb8LTEQOMLIbmRcGAJDlP4q8FdMSeY2pZ8bhkA/pb8dY5Yswe1X6pJ2HB+UQInSv4qRgJyB76h3pCcMROAEpdfFSMBX9YIkjscFJZA4hsWWmdtREgpE4GelF8U4+UKgPXUJbL8HJfB1mgMdtXQDTqMuZ+GnoAQ+VPqlMRKQRDGpao2GoATeZGARGRajGelOw1th4kAtawDjkabFMPnuKvpKqr0ubC60xMpE20ZM4EFlPlLo7A9LYAOwUwWVKLNRqfCuV9cPuSpoblK69IBujcjzrFfXT7Kz4YTA+8Bcdf0UuwqupA8TOJPzfMZmgdOa+AHgeXUtfaFHHEx+BPCG6nRIs2Co8n7OCPRntfSsGruXuzM0wMQ7A08zTe+sJt/Xa2qIOe1KXAPsYtG9CrhL3RvEFRR3OxUozvCedgyIlTSTm9U9eUdPLsY3wNJcJpZLZ24WD5RIF+B14AbgMuAxln0iIwnpWtQAe7mikoydBJzOCFuS4jfuBp7g78zk2FTW4hMzFVLZCExXk9ffkZLvcb58FHekO+/LQTyfyCYrgTsYMCXqD7buj+WOXxnEhC4BFqlr0eer69u9pmasFDpnMNVYw9q5MUNk38EVl92czJr7sJq85D0vWDXx4pbuQIkVwjeyuSXyOYkk6TnE9qsYdEwOI+O9GLXzaFZyML8EflSpyQqvqS1vZD/jzHaeCUNEXHa1Vew3FSxlZWWpCMhKTqBeQ3M4Yh3c+SnMZDNXqyrDzvagfd/iNf9fQJK2KTzARqRPOltVhBIvDmQjMNzqCoh57EkzmdvYfOqQoqaVNPgDmpgcZPP/wAVAmxQxZm6a3xBiF1JfZvWpUhLYqXpBc3LIR4rpDsXEOrUwFmzgAtRkeKYvXW5C1Qq70h3iYWryB+kms4k8dz+3V7zW6kwVFO8tpcsdm2XyHnd/obXraXdA0tcyFWXnBUwPitjVk+h9Klevlisn+KGF7+tCU8znWSil52rmhYro0z16jUUh8ptaeo1qR8nePnq70QyK8o/oi7YJXcwejGnt1XqtS1ZZAe4/Z2Cg0rd6rU8kLvxJfYCxnjwr29RtxMQxbmzZIv8I7aZeygKo2RnoqvQKngNfFdeNJNTA6zz6dzvR0s+a7l4jx3ORBBtbpsWYr97VjZ9JJod7C1QC1jsNmdYqxXoHhOV7HExwvIDjyTSfvvpuXNLAHW+gO/2XQB0LjUI1KUMg37ouoPn4qo+ZUFteaN3Xksxyrmxz9JXp+bxfTwL//A31twADAPdHI4VXfyAFAAAAAElFTkSuQmCC">
        </div>  
        <p>
          <span class="text-footer">Trung tâm cá nhân</span>
        </p>
      </a>  
  </div>
</div>
