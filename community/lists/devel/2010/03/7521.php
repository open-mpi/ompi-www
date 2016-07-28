<?
$subject_val = "Re: [OMPI devel] [OMPI bugs] [Open MPI] #2322: Something is wrong with rdmacm cpc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 06:29:46 2010" -->
<!-- isoreceived="20100303112946" -->
<!-- sent="Wed, 3 Mar 2010 05:29:40 -0600" -->
<!-- isosent="20100303112940" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI bugs] [Open MPI] #2322: Something is wrong with rdmacm cpc" -->
<!-- id="58D723FE08DC6A4398E6596E38F3FA17056701_at_XMB-RCD-205.cisco.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI devel] [OMPI bugs] [Open MPI] #2322: Something is wrong with rdmacm cpc" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI bugs] [Open MPI] #2322: Something is wrong with rdmacm cpc<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 06:29:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7522.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Previous message:</strong> <a href="7520.php">Damien Guinier: "Re: [OMPI devel] Openmpi with slurm : salloc -c"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I did test the patch 2 version and that does seem to be working for me. However, that obviously doesn't mean that it's safe. 
<br>

<br>
Should we put some atomics in there, to be absolutely sure?  Or put a lock around the dlsym code to ensure that only 1 thread calls dlsym?
<br>

<br>
-jms
<br>
Sent from my PDA.  No type good.
<br>

<br>
----- Original Message -----
<br>
From: bugs-bounces_at_[hidden] &lt;bugs-bounces_at_[hidden]&gt;
<br>
Cc: bugs_at_[hidden] &lt;bugs_at_[hidden]&gt;
<br>
Sent: Wed Mar 03 01:45:38 2010
<br>
Subject: Re: [OMPI bugs] [Open MPI] #2322: Something is wrong with rdmacm cpc
<br>

<br>
#2322: Something is wrong with rdmacm cpc
<br>
---------------------+------------------------------------------------------
<br>
Reporter:  jsquyres  |       Owner:                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Type:  defect    |      Status:  new           
<br>
Priority:  blocker   |   Milestone:  Open MPI 1.4.2
<br>
&nbsp;Version:  trunk     |    Keywords:                
<br>
---------------------+------------------------------------------------------
<br>

<br>
Comment(by cyeoh):
<br>

<br>
&nbsp;I might be misunderstanding whats going on here, but I don't think the
<br>
&nbsp;volatile will help with respect to the second two of the three causes of
<br>
&nbsp;the segv as AFAIK volatile doesn't make any guarantees when it comes
<br>
&nbsp;atomicity. It will force a reload each time but if the read is not atomic
<br>
&nbsp;anyway then there still could be problems
<br>

<br>
&nbsp;However I do suspect the latter two are not causing the problems. The
<br>
&nbsp;static pointer should be aligned and I think in that case the assignments
<br>
&nbsp;should be atomic (will be for powerpc, I think so for other
<br>
&nbsp;architectures).
<br>

<br>
&nbsp;I think its much more likely that dlsym was getting called when its not
<br>
&nbsp;safe to (the first theory).
<br>

<br>
&nbsp;The consolidation of the code looks good - sorry I should have done that
<br>
&nbsp;in the first place.
<br>

<br>
&nbsp;If its working now is it possible that its because its now consolidated
<br>
&nbsp;into opal_mem_free_ptmalloc2_munmap that the munmap_real is getting called
<br>
&nbsp;consistently early at a time when its safe to call dlsym (ie not through
<br>
&nbsp;the munmap_real path which appears to be sometimes unsafe) ?
<br>

<br>
-- 
<br>
Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2322#comment:6">https://svn.open-mpi.org/trac/ompi/ticket/2322#comment:6</a>&gt;
<br>
Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
<br>

<br>
_______________________________________________
<br>
bugs mailing list
<br>
bugs_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/bugs">http://www.open-mpi.org/mailman/listinfo.cgi/bugs</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7521/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7522.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Previous message:</strong> <a href="7520.php">Damien Guinier: "Re: [OMPI devel] Openmpi with slurm : salloc -c"</a>
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
