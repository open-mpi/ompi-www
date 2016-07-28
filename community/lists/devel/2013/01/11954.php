<?
$subject_val = "Re: [OMPI devel] MPI-2.2 status #2223, #3127";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 20 20:41:27 2013" -->
<!-- isoreceived="20130121014127" -->
<!-- sent="Mon, 21 Jan 2013 01:41:19 +0000" -->
<!-- isosent="20130121014119" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI-2.2 status #2223, #3127" -->
<!-- id="DF152F4B8E08AE4AAF80927EA5DC03AC0E994034_at_G01JPEXMBYT02" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="6EBC852D-A939-4824-AE38-584632B9E147_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI-2.2 status #2223, #3127<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-20 20:41:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11955.php">Leif Lindholm: "[OMPI devel] New ARM patch"</a>
<li><strong>Previous message:</strong> <a href="11953.php">Kawashima, Takahiro: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="11951.php">George Bosilca: "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11947.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff, George,
<br>
<p>Thanks for your replies. I'll notify my colleagues of these mails.
<br>
Please tell me (or write on the ticket) which repo to use for topo
<br>
after you take a look.
<br>
<p>Regards,
<br>
Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p><span class="quotelev1">&gt; Long story short. It is freshly forked from the OMPI trunk, patched with topi-fixes (and not topo-fixes-fixed for some reason). Don't whack them yet, let me take a look more in details.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 18, 2013, at 17:10 , &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ok.  If it contains everything you put on the original topo-fixes (and topo-fixes-fixed), I might as well kill those two repos and put your repo URL on the ticket.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So -- before I whack those two -- can you absolutely confirm that you've got everything from the topo-fixes-fixed repo?  IIRC, there was some other fixes/updates to the topo base in there, not just the new dist_graph improvements.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 18, 2013, at 11:06 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It's a fork from the official ompi (well the hg version of it). We will push back once we're done.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; George.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jan 18, 2013, at 15:42 , &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; George --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Should I pull from your repo into <a href="https://bitbucket.org/jsquyres/ompi-topo-fixes-fixed">https://bitbucket.org/jsquyres/ompi-topo-fixes-fixed</a>?  Or did you effectively fork, and you guys will put back to SVN when you're done?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Jan 18, 2013, at 5:47 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Takahiro,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The MPI_Dist_graph effort is happening in ssh://hg@bitbucket.org/bosilca/ompi-topo. I would definitely be interested in seeing some test cases, and giving this branch a tough test.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; George.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Jan 18, 2013, at 02:43 , &quot;Kawashima, Takahiro&quot; &lt;t-kawashima_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Fujitsu is interested in completing MPI-2.2 on Open MPI and Open MPI
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -based Fujitsu MPI.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; We've read wiki and tickets. These two tickets seem to be almost done
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; but need testing and bug fixing.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2223">https://svn.open-mpi.org/trac/ompi/ticket/2223</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; MPI-2.2: MPI_Dist_graph_* functions missing
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/3127">https://svn.open-mpi.org/trac/ompi/ticket/3127</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; MPI-2.2: Add reduction support for MPI_C_*COMPLEX and MPI::*COMPLEX
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; My colleagues are planning to work on these. They will write test codes
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; and try to fix bugs. Test codes and patches can be contributed to the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; community. If they cannot fix some bugs, we will report details. They
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; are planning to complete them in around March.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; With that two questions.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The latest statuses written in these ticket comments are correct?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Is there any more progress?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Where are the latest codes?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; In ticket #2223 says it is on Jeff's ompi-topo-fixes bitbucket branch.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="https://bitbucket.org/jsquyres/ompi-topo-fixes">https://bitbucket.org/jsquyres/ompi-topo-fixes</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; But Jeff seems to have one more branch with a similar name.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="https://bitbucket.org/jsquyres/ompi-topo-fixes-fixed">https://bitbucket.org/jsquyres/ompi-topo-fixes-fixed</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Ticket #3127 says it is on Jeff's mpi22-c-complex bitbucket branch.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; But there is no such branch now.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="https://bitbucket.org/jsquyres/mpi22-c-complex">https://bitbucket.org/jsquyres/mpi22-c-complex</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11955.php">Leif Lindholm: "[OMPI devel] New ARM patch"</a>
<li><strong>Previous message:</strong> <a href="11953.php">Kawashima, Takahiro: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="11951.php">George Bosilca: "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11947.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
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
