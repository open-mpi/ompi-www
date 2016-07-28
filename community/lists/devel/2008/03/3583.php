<?
$subject_val = "Re: [OMPI devel] Session directories in $HOME?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 15:51:46 2008" -->
<!-- isoreceived="20080331195146" -->
<!-- sent="Mon, 31 Mar 2008 15:51:39 -0400" -->
<!-- isosent="20080331195139" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Session directories in $HOME?" -->
<!-- id="0AF1379F-966F-4BA6-8C27-639334F9A0B2_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="147EF282-E508-4B77-9767-C8AD640FECA6_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-31 15:51:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3584.php">Shipman, Galen M.: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Previous message:</strong> <a href="3582.php">Josh Hursey: "[OMPI devel] Session directories in $HOME?"</a>
<li><strong>In reply to:</strong> <a href="3582.php">Josh Hursey: "[OMPI devel] Session directories in $HOME?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3584.php">Shipman, Galen M.: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Reply:</strong> <a href="3584.php">Shipman, Galen M.: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Reply:</strong> <a href="3585.php">Josh Hursey: "Re: [OMPI devel] Session directories in $HOME?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I looked over the code and I don't see any problems with the changes.  
<br>
The only think I did is replacing the getenv(&quot;HOME&quot;) by  
<br>
opal_home_directory ...
<br>
<p>Here is the logic for selecting the TMP directory:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( NULL == (str = getenv(&quot;TMPDIR&quot;)) )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( NULL == (str = getenv(&quot;TEMP&quot;)) )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( NULL == (str = getenv(&quot;TMP&quot;)) )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( NULL == (str = opal_home_directory()) )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;str = &quot;.&quot;;
<br>
<p>Do you have any of those (TMPDIR, TEMP or TMP) in your environment ?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 31, 2008, at 3:13 PM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; So does anyone know why the session directories are in $HOME instead
</span><br>
<span class="quotelev1">&gt; of /tmp?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using r18044 and every time I run the session directories are
</span><br>
<span class="quotelev1">&gt; created in $HOME. George does this have anything to do with your
</span><br>
<span class="quotelev1">&gt; commits from earlier?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3583/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3584.php">Shipman, Galen M.: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Previous message:</strong> <a href="3582.php">Josh Hursey: "[OMPI devel] Session directories in $HOME?"</a>
<li><strong>In reply to:</strong> <a href="3582.php">Josh Hursey: "[OMPI devel] Session directories in $HOME?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3584.php">Shipman, Galen M.: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Reply:</strong> <a href="3584.php">Shipman, Galen M.: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Reply:</strong> <a href="3585.php">Josh Hursey: "Re: [OMPI devel] Session directories in $HOME?"</a>
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
