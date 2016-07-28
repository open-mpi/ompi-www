<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 11 20:08:08 2006" -->
<!-- isoreceived="20061012000808" -->
<!-- sent="Wed, 11 Oct 2006 18:08:05 -0600" -->
<!-- isosent="20061012000805" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r12092" -->
<!-- id="C152E385.4137%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9EDC893D-0EF3-46BD-9C49-BA97EA98EEAE_at_cs.utk.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-11 20:08:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1108.php">Jeff Squyres: "Re: [OMPI devel] Shared memory file changes"</a>
<li><strong>Previous message:</strong> <a href="1106.php">Adrian Knoth: "[OMPI devel] IPv6 in btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="1103.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r12092"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's fine with me too. I only entered this because we needed something to
<br>
help check memory corruption on the backend, and not every environment will
<br>
support the xterm approach (especially around here). I was of two minds
<br>
about it, but needed something in the code that could be moved from computer
<br>
to computer for testing.
<br>
<p>I can modify it accordingly.
<br>
<p><p><p>On 10/11/06 12:28 PM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm usually not in favor of such commits. They are very development
</span><br>
<span class="quotelev1">&gt; specific, and to be honest very user specific. I use valgrind on a
</span><br>
<span class="quotelev1">&gt; regular basis, but that's not a reason to commit my changes into the
</span><br>
<span class="quotelev1">&gt; trunk. However, I think it can be interesting to allow us to prepend
</span><br>
<span class="quotelev1">&gt; something to the command line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you ask me how I use valgrind I will tell you that I spawn an
</span><br>
<span class="quotelev1">&gt; xterm with valgrind inside (and let vagrind start gdb for me when it
</span><br>
<span class="quotelev1">&gt; detect some memory problems). If we want to have a generic solution
</span><br>
<span class="quotelev1">&gt; that will work for everybody let's create a MCA parameter which
</span><br>
<span class="quotelev1">&gt; contain a string that will be prepended to all orted command lines.
</span><br>
<span class="quotelev1">&gt; So instead of starting &quot;orted $args&quot; we will start &quot;$orte_prepend
</span><br>
<span class="quotelev1">&gt; orted $args&quot;. That way everybody can configure the spawning process
</span><br>
<span class="quotelev1">&gt; exactly as they want.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 11, 2006, at 1:48 PM, rhc_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2006-10-11 13:48:41 EDT (Wed, 11 Oct 2006)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 12092
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/orte/mca/pls/rsh/pls_rsh_component.c
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Add the proper valgrind params
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/pls/rsh/pls_rsh_component.c
</span><br>
<span class="quotelev2">&gt;&gt; ======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; ========
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/pls/rsh/pls_rsh_component.c (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/pls/rsh/pls_rsh_component.c 2006-10-11 13:48:41
</span><br>
<span class="quotelev2">&gt;&gt; EDT (Wed, 11 Oct 2006)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -110,6 +110,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt;      int tmp;
</span><br>
<span class="quotelev2">&gt;&gt;      char *ctmp;
</span><br>
<span class="quotelev2">&gt;&gt; +    char *valgrind = &quot;valgrind --verbose --log-file=debug.out --
</span><br>
<span class="quotelev2">&gt;&gt; num-callers=100 --tool=memcheck --trace-children=no --leak-
</span><br>
<span class="quotelev2">&gt;&gt; check=full --show-reachable=yes&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;      mca_base_component_t *c =
</span><br>
<span class="quotelev2">&gt;&gt; &amp;mca_pls_rsh_component.super.pls_version;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      /* initialize globals */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -158,7 +159,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                                  &quot;Whether or not to launch the
</span><br>
<span class="quotelev2">&gt;&gt; orteds under valgrind (Linux *only*)&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                                  false, false, (int)false, &amp;tmp);
</span><br>
<span class="quotelev2">&gt;&gt;      if (tmp) {
</span><br>
<span class="quotelev2">&gt;&gt; -        asprintf(&amp;ctmp, &quot;valgrind %s&quot;, mca_pls_rsh_component.orted);
</span><br>
<span class="quotelev2">&gt;&gt; +        asprintf(&amp;ctmp, &quot;%s %s&quot;, valgrind,
</span><br>
<span class="quotelev2">&gt;&gt; mca_pls_rsh_component.orted);
</span><br>
<span class="quotelev2">&gt;&gt;          free(mca_pls_rsh_component.orted);
</span><br>
<span class="quotelev2">&gt;&gt;          mca_pls_rsh_component.orted = ctmp;
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
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
<li><strong>Next message:</strong> <a href="1108.php">Jeff Squyres: "Re: [OMPI devel] Shared memory file changes"</a>
<li><strong>Previous message:</strong> <a href="1106.php">Adrian Knoth: "[OMPI devel] IPv6 in btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="1103.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r12092"</a>
<!-- nextthread="start" -->
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
