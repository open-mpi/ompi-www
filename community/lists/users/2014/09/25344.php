<?
$subject_val = "Re: [OMPI users] About debugging and asynchronous communication";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 06:36:14 2014" -->
<!-- isoreceived="20140918103614" -->
<!-- sent="Thu, 18 Sep 2014 10:36:13 +0000" -->
<!-- isosent="20140918103613" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About debugging and asynchronous communication" -->
<!-- id="F00115BA-A2D5-43FA-8FBC-F1E337A84D8D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKY4v9--z+YDqdXcjuuJAnsVArEgOT4Xy=Yiga0fm1VzHxUS1Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] About debugging and asynchronous communication<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-18 06:36:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25345.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Previous message:</strong> <a href="25343.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>In reply to:</strong> <a href="25342.php">XingFENG: "[OMPI users] About debugging and asynchronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25345.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Reply:</strong> <a href="25345.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 18, 2014, at 2:43 AM, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; a. How to get more information about errors? I got errors like below. This says that program exited abnormally in function MPI_Test(). But is there a way to know more about the error? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Test
</span><br>
<span class="quotelev1">&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<p>For the purpose of this discussion, let's take a simplification that you are sending and receiving the same datatypes (e.g., you're sending MPI_INT and you're receiving MPI_INT).
<br>
<p>This error means that you tried to receive message with too small a buffer.
<br>
<p>Specifically, MPI says that if you send a message that is X element long (e.g., 20 MPI_INTs), then the matching receive must be Y elements, where Y&gt;=X (e.g., *at least* 20 MPI_INTs).  If the receiver provides a Y where Y&lt;X, this is a truncation error.
<br>
<p>Unfortunately, Open MPI doesn't report a whole lot more information about these kinds of errors than what you're seeing, sorry.
<br>
<p><span class="quotelev1">&gt; b. Are there anything to note about asynchronous communication? I use MPI_Isend, MPI_Irecv, MPI_Test to implement asynchronous communication. My program works well on small data sets(10K nodes graphs), but it exits abnormally on large data set (1M nodes graphs).
</span><br>
<p>Is it failing due to truncation errors, or something else?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25345.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Previous message:</strong> <a href="25343.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>In reply to:</strong> <a href="25342.php">XingFENG: "[OMPI users] About debugging and asynchronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25345.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Reply:</strong> <a href="25345.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
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
