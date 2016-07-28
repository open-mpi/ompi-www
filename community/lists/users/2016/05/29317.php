<?
$subject_val = "Re: [OMPI users] users Digest, Vol 3510, Issue 2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 26 15:48:48 2016" -->
<!-- isoreceived="20160526194848" -->
<!-- sent="Thu, 26 May 2016 19:46:03 +0000 (UTC)" -->
<!-- isosent="20160526194603" -->
<!-- name="Megdich Islem" -->
<!-- email="megdich_islem_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 3510, Issue 2" -->
<!-- id="777077126.2222461.1464291963715.JavaMail.yahoo_at_mail.yahoo.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="87posaw3h2.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 3510, Issue 2<br>
<strong>From:</strong> Megdich Islem (<em>megdich_islem_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-26 15:46:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29318.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="29316.php">Ralph Castain: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>In reply to:</strong> <a href="29314.php">Dave Love: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29318.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>Reply:</strong> <a href="29318.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you all for your suggestions !!
<br>
I found an answer to a similar case in Open MPI FAQ (Question 15)FAQ: Running MPI jobs
<br>
<p>| &#194;&#160; |
<br>
| &#194;&#160; |  | &#194;&#160; | &#194;&#160; | &#194;&#160; | &#194;&#160; | &#194;&#160; |
<br>
| FAQ: Running MPI jobsTable of contents: What pre-requisites are necessary for running an Open MPI job? What ABI guarantees does Open MPI provide? Do I need a common filesystem on a... |
<br>
|  |
<br>
| Afficher sur www.open-mpi.org | Aper&#195;&#167;u par Yahoo |
<br>
|  |
<br>
| &#194;&#160; |
<br>
<p>which suggests to use mpirun's &#194;&#160;prefix command line option or to use the mpirun wrapper.
<br>
I modified my command &#194;&#160;to the following&#194;&#160;mpirun --prefix /opt/openfoam30/platforms/linux64GccDPInt32Opt/lib/Openmpi-system -np 1 pimpleDyMFoam -case OF
<br>
But, I got an error (see attached picture). Is the syntax correct? How can I solve the problem? That first method seems to be easier than using the mpirun wrapper.
<br>
Otherwise, how can I use the mpirun wrapper?
<br>
Regards,islem 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Le Mercredi 25 mai 2016 16h40, Dave Love &lt;d.love_at_[hidden]&gt; a &#195;&#169;crit :
<br>
&nbsp;
<br>
<p>&nbsp;I wrote: 
<br>
<p><span class="quotelev1">&gt; You could wrap one (set of) program(s) in a script to set the
</span><br>
<span class="quotelev1">&gt; appropriate environment before invoking the real program.&#194;&#160; 
</span><br>
<p>I realize I should have said something like &quot;program invocations&quot;,
<br>
i.e. if you have no control over something invoking mpirun for programs
<br>
using different MPIs, then an mpirun wrapper needs to check what it's
<br>
being asked to run.
<br>
<p><p>&nbsp;&nbsp;
<br>
<p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29317/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-29317/mpirun-error.png" alt="mpirun-error.png">
<!-- attachment="mpirun-error.png" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-29317/path-to-open-mpi.png" alt="path-to-open-mpi.png">
<!-- attachment="path-to-open-mpi.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29318.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="29316.php">Ralph Castain: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>In reply to:</strong> <a href="29314.php">Dave Love: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29318.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>Reply:</strong> <a href="29318.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
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
