<?
$subject_val = "Re: [OMPI devel] 1.4.4rc2 is up";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 20 18:33:03 2011" -->
<!-- isoreceived="20110520223303" -->
<!-- sent="Fri, 20 May 2011 15:32:58 -0700" -->
<!-- isosent="20110520223258" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.4rc2 is up" -->
<!-- id="EBF12E1F-7445-4BA1-B9F6-E93114E267F4_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CB6264CC-7C21-486E-9FF9-C0C6E8159B17_at_cisco.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI devel] 1.4.4rc2 is up<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-20 18:32:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9281.php">Dan Reynolds: "[OMPI devel] F90 open-mpi module bug"</a>
<li><strong>Previous message:</strong> <a href="9279.php">Edgar Gabriel: "[OMPI devel] problems compiling new ROMIO with PVFS2 support"</a>
<li><strong>In reply to:</strong> <a href="9249.php">Jeff Squyres: "[OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9286.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I get warnings from all my compilers running &quot;make check&quot; when  
<br>
compiling test/class/ompi_rb_tree.c.  For example, using gcc/g++/ 
<br>
gfortran:
<br>
<p><span class="quotelev1">&gt; ompi_rb_tree.c: In function 'test2':
</span><br>
<span class="quotelev1">&gt; ompi_rb_tree.c:347: warning: cast to pointer from integer of  
</span><br>
<span class="quotelev1">&gt; different size
</span><br>
<span class="quotelev1">&gt; ompi_rb_tree.c:365: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev1">&gt; different size
</span><br>
<span class="quotelev1">&gt; ompi_rb_tree.c:373: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev1">&gt; different size
</span><br>
<p>This is due, I am sure, to the mixing of 64-bit pointers and 32-bit  
<br>
integers.  Do you have a &quot;safe&quot; method to do these conversions so  
<br>
these warnings go away?  Maybe a macro you use in the library?
<br>
<p>While looking at the source of the warnings, I saw that the code in  
<br>
test/class/ompi_rb_tree.c, lines 361-368 are duplicated in lines  
<br>
369-376 (quoted, below).  Is this intentional?
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>function test2() in test/class/ompi_rb_tree.c:
<br>
<p>void test2(void)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_free_list_t key_list;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_free_list_item_t * new_value;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_rb_tree_t tree;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rc, i, size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void * result, * lookup;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void * mem[NUM_ALLOCATIONS];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_free_list_item_t * key_array[NUM_ALLOCATIONS];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct timeval start, end;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CONSTRUCT(&amp;key_list, ompi_free_list_t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_free_list_init_new(&amp;key_list, sizeof(ompi_test_rb_value_t),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CACHE_LINE_SIZE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CLASS(ompi_test_rb_value_t),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0,CACHE_LINE_SIZE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0, -1 , 128, NULL);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CONSTRUCT(&amp;tree, ompi_rb_tree_t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = ompi_rb_tree_init(&amp;tree, mem_node_compare);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!test_verify_int(OMPI_SUCCESS, rc)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test_failure(&quot;failed to properly initialize the tree&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i = 0; i &lt; NUM_ALLOCATIONS; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mem[i] = malloc(size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(NULL == mem[i])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test_failure(&quot;system out of memory&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_FREE_LIST_GET(&amp;key_list, new_value, rc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(OMPI_SUCCESS != rc)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test_failure(&quot;failed to get memory from free list&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;key_array[i] = new_value;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((ompi_test_rb_value_t *) new_value)-&gt;key.bottom = mem[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((ompi_test_rb_value_t *) new_value)-&gt;key.top =
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void *) ((size_t) mem[i]  
<br>
+ size - 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((ompi_test_rb_value_t *) new_value)-&gt;registered_mpools[0] =  
<br>
(void *) i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = ompi_rb_tree_insert(&amp;tree, &amp;((ompi_test_rb_value_t  
<br>
*)new_value)-&gt;key,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new_value);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(OMPI_SUCCESS != rc)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test_failure(&quot;failed to properly insert a new node&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size += 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gettimeofday(&amp;start, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i = 0; i &lt; NUM_ALLOCATIONS; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lookup = (void *) ((size_t) mem[i] + i);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;result = ompi_rb_tree_find(&amp;tree, &amp;lookup);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(NULL == result)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test_failure(&quot;lookup returned null!&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if(i != ((int) ((ompi_test_rb_value_t *) result)- 
<br>
<span class="quotelev1"> &gt;registered_mpools[0]))
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test_failure(&quot;lookup returned wrong node!&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<span class="quotelev1">&gt;         result = ompi_rb_tree_find(&amp;tree, &amp;lookup);
</span><br>
<span class="quotelev1">&gt;         if(NULL == result)
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;             test_failure(&quot;lookup returned null!&quot;);
</span><br>
<span class="quotelev1">&gt;         } else if(i != ((int) ((ompi_test_rb_value_t *) result)- 
</span><br>
<span class="quotelev2">&gt; &gt;registered_mpools[0]))
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;             test_failure(&quot;lookup returned wrong node!&quot;);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gettimeofday(&amp;end, NULL);
<br>
<p>#if 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i = (end.tv_sec - start.tv_sec) * 1000000 + (end.tv_usec -  
<br>
start.tv_usec);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;In a %d node tree, %d lookups took %f microseonds each\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NUM_ALLOCATIONS, NUM_ALLOCATIONS * 2,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(float) i / (float) (NUM_ALLOCATIONS * 2));
<br>
#endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i = 0; i &lt; NUM_ALLOCATIONS; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(NULL != mem[i])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(mem[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_FREE_LIST_RETURN(&amp;(key_list), key_array[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_DESTRUCT(&amp;tree);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_DESTRUCT(&amp;key_list);
<br>
}
<br>
<p>On 5 May 2011, at 7:15 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Fixed the ROMIO attribute problem properly this time -- it's in the  
</span><br>
<span class="quotelev1">&gt; usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9281.php">Dan Reynolds: "[OMPI devel] F90 open-mpi module bug"</a>
<li><strong>Previous message:</strong> <a href="9279.php">Edgar Gabriel: "[OMPI devel] problems compiling new ROMIO with PVFS2 support"</a>
<li><strong>In reply to:</strong> <a href="9249.php">Jeff Squyres: "[OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9286.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
