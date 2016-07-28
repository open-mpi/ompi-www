<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 11 14:29:05 2006" -->
<!-- isoreceived="20061011182905" -->
<!-- sent="Wed, 11 Oct 2006 14:28:58 -0400" -->
<!-- isosent="20061011182858" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r12092" -->
<!-- id="9EDC893D-0EF3-46BD-9C49-BA97EA98EEAE_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200610111748.k9BHmiok025444_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-11 14:28:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1104.php">Brian W. Barrett: "[OMPI devel] Shared memory file changes"</a>
<li><strong>Previous message:</strong> <a href="1102.php">Jeff Squyres: "[OMPI devel] ORTE fixes on v1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1107.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r12092"</a>
<li><strong>Reply:</strong> <a href="1107.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r12092"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm usually not in favor of such commits. They are very development  
<br>
specific, and to be honest very user specific. I use valgrind on a  
<br>
regular basis, but that's not a reason to commit my changes into the  
<br>
trunk. However, I think it can be interesting to allow us to prepend  
<br>
something to the command line.
<br>
<p>If you ask me how I use valgrind I will tell you that I spawn an  
<br>
xterm with valgrind inside (and let vagrind start gdb for me when it  
<br>
detect some memory problems). If we want to have a generic solution  
<br>
that will work for everybody let's create a MCA parameter which  
<br>
contain a string that will be prepended to all orted command lines.  
<br>
So instead of starting &quot;orted $args&quot; we will start &quot;$orte_prepend  
<br>
orted $args&quot;. That way everybody can configure the spawning process  
<br>
exactly as they want.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 11, 2006, at 1:48 PM, rhc_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2006-10-11 13:48:41 EDT (Wed, 11 Oct 2006)
</span><br>
<span class="quotelev1">&gt; New Revision: 12092
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified:
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/pls/rsh/pls_rsh_component.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add the proper valgrind params
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/pls/rsh/pls_rsh_component.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/pls/rsh/pls_rsh_component.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/pls/rsh/pls_rsh_component.c	2006-10-11 13:48:41  
</span><br>
<span class="quotelev1">&gt; EDT (Wed, 11 Oct 2006)
</span><br>
<span class="quotelev1">&gt; @@ -110,6 +110,7 @@
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      int tmp;
</span><br>
<span class="quotelev1">&gt;      char *ctmp;
</span><br>
<span class="quotelev1">&gt; +    char *valgrind = &quot;valgrind --verbose --log-file=debug.out -- 
</span><br>
<span class="quotelev1">&gt; num-callers=100 --tool=memcheck --trace-children=no --leak- 
</span><br>
<span class="quotelev1">&gt; check=full --show-reachable=yes&quot;;
</span><br>
<span class="quotelev1">&gt;      mca_base_component_t *c =  
</span><br>
<span class="quotelev1">&gt; &amp;mca_pls_rsh_component.super.pls_version;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* initialize globals */
</span><br>
<span class="quotelev1">&gt; @@ -158,7 +159,7 @@
</span><br>
<span class="quotelev1">&gt;                                  &quot;Whether or not to launch the  
</span><br>
<span class="quotelev1">&gt; orteds under valgrind (Linux *only*)&quot;,
</span><br>
<span class="quotelev1">&gt;                                  false, false, (int)false, &amp;tmp);
</span><br>
<span class="quotelev1">&gt;      if (tmp) {
</span><br>
<span class="quotelev1">&gt; -        asprintf(&amp;ctmp, &quot;valgrind %s&quot;, mca_pls_rsh_component.orted);
</span><br>
<span class="quotelev1">&gt; +        asprintf(&amp;ctmp, &quot;%s %s&quot;, valgrind,  
</span><br>
<span class="quotelev1">&gt; mca_pls_rsh_component.orted);
</span><br>
<span class="quotelev1">&gt;          free(mca_pls_rsh_component.orted);
</span><br>
<span class="quotelev1">&gt;          mca_pls_rsh_component.orted = ctmp;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1104.php">Brian W. Barrett: "[OMPI devel] Shared memory file changes"</a>
<li><strong>Previous message:</strong> <a href="1102.php">Jeff Squyres: "[OMPI devel] ORTE fixes on v1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1107.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r12092"</a>
<li><strong>Reply:</strong> <a href="1107.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r12092"</a>
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
