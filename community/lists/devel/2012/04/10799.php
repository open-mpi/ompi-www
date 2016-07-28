<?
$subject_val = "Re: [OMPI devel] Regarding the Installation of Open MPI in Amazon EC2 cloud by using UNIVA cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  2 10:17:14 2012" -->
<!-- isoreceived="20120402141714" -->
<!-- sent="Mon, 2 Apr 2012 10:17:09 -0400" -->
<!-- isosent="20120402141709" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Regarding the Installation of Open MPI in Amazon EC2 cloud by using UNIVA cluster" -->
<!-- id="5405E8A7-85E7-4841-9922-73716EC49647_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJ_xm3ANoVmwK5NH6ax0GtwW780YqA=PHo6XDzTeZ66p-+wP5A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Regarding the Installation of Open MPI in Amazon EC2 cloud by using UNIVA cluster<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-02 10:17:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10800.php">Ralph Castain: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Previous message:</strong> <a href="10798.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/03/10790.php">seshendra seshu: "[OMPI devel] Regarding the Installation of Open MPI in Amazon EC2 cloud by using UNIVA cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't quite parse your question.
<br>
<p>In general, if libmpi.so is not in your default linker search path, you probably need to add it to your LD_LIBRARY_PATH (e.g., in your shell startup file, such as .bashrc). 
<br>
<p>This will be true regardless of whether you are using real machines or virtual machines on EC2 (or any other cloud).
<br>
<p><p>On Mar 30, 2012, at 8:20 PM, seshendra seshu wrote:
<br>
<p><span class="quotelev1">&gt; HI,
</span><br>
<span class="quotelev1">&gt; This is seshendra, presently doing my Master thesis.
</span><br>
<span class="quotelev1">&gt; I have trying to install openMPI on cloud provided by Aamazon EC2, the
</span><br>
<span class="quotelev1">&gt; problem is&quot;i have configured the 3 node cluster which was supported by
</span><br>
<span class="quotelev1">&gt; UNIVA in amazon, then i have installed open MPI on all the nodes, but when i
</span><br>
<span class="quotelev1">&gt; tried to run the MPI programs  Then i have got an libmpi.so is not installed and how to connect the other nodes in cluster to participate in computing the problem that is parallely executing the program.So can you please guide in configuring the Open MPI in cloud with the  nodes present in the cluster&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  WITH REGARDS
</span><br>
<span class="quotelev1">&gt; M.L.N.Seshendra
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10800.php">Ralph Castain: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Previous message:</strong> <a href="10798.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/03/10790.php">seshendra seshu: "[OMPI devel] Regarding the Installation of Open MPI in Amazon EC2 cloud by using UNIVA cluster"</a>
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
