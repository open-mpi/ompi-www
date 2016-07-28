<?
$subject_val = "Re: [OMPI devel] Session directories in $HOME?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 16:00:57 2008" -->
<!-- isoreceived="20080331200057" -->
<!-- sent="Mon, 31 Mar 2008 16:00:27 -0400" -->
<!-- isosent="20080331200027" -->
<!-- name="Shipman, Galen M." -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Session directories in $HOME?" -->
<!-- id="B23C3619-2CEE-4D45-8A10-ADAA3608E7A2_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0AF1379F-966F-4BA6-8C27-639334F9A0B2_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Session directories in $HOME?<br>
<strong>From:</strong> Shipman, Galen M. (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-31 16:00:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3585.php">Josh Hursey: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Previous message:</strong> <a href="3583.php">George Bosilca: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>In reply to:</strong> <a href="3583.php">George Bosilca: "Re: [OMPI devel] Session directories in $HOME?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3590.php">Aurélien Bouteiller: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Reply:</strong> <a href="3590.php">Aurélien Bouteiller: "Re: [OMPI devel] Session directories in $HOME?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Slightly OT but along the same lines..
<br>
<p>We currently have an argument to mpirun to set the HNP tmpdir (-- 
<br>
tmpdir).
<br>
Why don't we have an mca param to set the tmpdir for all the orted's  
<br>
and such?
<br>
<p>- Galen
<br>
<p>On Mar 31, 2008, at 3:51 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I looked over the code and I don't see any problems with the  
</span><br>
<span class="quotelev1">&gt; changes. The only think I did is replacing the getenv(&quot;HOME&quot;) by  
</span><br>
<span class="quotelev1">&gt; opal_home_directory ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the logic for selecting the TMP directory:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if( NULL == (str = getenv(&quot;TMPDIR&quot;)) )
</span><br>
<span class="quotelev1">&gt;         if( NULL == (str = getenv(&quot;TEMP&quot;)) )
</span><br>
<span class="quotelev1">&gt;             if( NULL == (str = getenv(&quot;TMP&quot;)) )
</span><br>
<span class="quotelev1">&gt;                 if( NULL == (str = opal_home_directory()) )
</span><br>
<span class="quotelev1">&gt;                     str = &quot;.&quot;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any of those (TMPDIR, TEMP or TMP) in your environment ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 31, 2008, at 3:13 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; So does anyone know why the session directories are in $HOME instead
</span><br>
<span class="quotelev2">&gt;&gt; of /tmp?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using r18044 and every time I run the session directories are
</span><br>
<span class="quotelev2">&gt;&gt; created in $HOME. George does this have anything to do with your
</span><br>
<span class="quotelev2">&gt;&gt; commits from earlier?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="3585.php">Josh Hursey: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Previous message:</strong> <a href="3583.php">George Bosilca: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>In reply to:</strong> <a href="3583.php">George Bosilca: "Re: [OMPI devel] Session directories in $HOME?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3590.php">Aurélien Bouteiller: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Reply:</strong> <a href="3590.php">Aurélien Bouteiller: "Re: [OMPI devel] Session directories in $HOME?"</a>
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
