<?
$subject_val = "Re: [OMPI users] Trouble with MPI_Recv not filling buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 10:45:24 2013" -->
<!-- isoreceived="20130708144524" -->
<!-- sent="Mon, 8 Jul 2013 14:45:20 +0000" -->
<!-- isosent="20130708144520" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with MPI_Recv not filling buffer" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6F298A_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51D86317.9090403_at_student.uni-kassel.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble with MPI_Recv not filling buffer<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-08 10:45:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22275.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Previous message:</strong> <a href="22273.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<li><strong>In reply to:</strong> <a href="22265.php">Patrick Br&#195;&#188;ckner: "[OMPI users] Trouble with MPI_Recv not filling buffer"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 6, 2013, at 2:33 PM, Patrick Br&#252;ckner &lt;patrick.brueckner_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; data p;
</span><br>
<span class="quotelev1">&gt; p.collection = malloc(sizeof(int)*N);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; printf(&quot;[%d] before receiving, data id %d at %d with direction %d\n&quot;,me,p.id,p.position,p.direction);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Status data_status;
</span><br>
<span class="quotelev1">&gt; MPI_Recv(&amp;p,1,MPI_data,MPI_ANY_SOURCE,99,MPI_COMM_WORLD,&amp;data_status);
</span><br>
<span class="quotelev1">&gt; if(data_status.MPI_ERROR != MPI_SUCCESS) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;[%d] ERROR %d&quot;,me,data_status.MPI_ERROR);
</span><br>
<span class="quotelev1">&gt;    return -1;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; printf(&quot;[%d] received status %d\n&quot;,data_status.MPI_ERROR);
</span><br>
<p>I think you need &quot;me&quot; as the first printable argument in there.
<br>
<p><span class="quotelev1">&gt; received++;
</span><br>
<span class="quotelev1">&gt; printf(&quot;[%0d] received data %d (%d/%d) at position %d with direction %d\n&quot;,me,p.id,received,expected,p.position,p.direction);
</span><br>
<span class="quotelev1">&gt; --- snip ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get this output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1] before receiving, data id -1665002272 at 0 with direction 0
</span><br>
<span class="quotelev1">&gt; [0] received status 0
</span><br>
<span class="quotelev1">&gt; [1] received data -1665002272 (1/2) at position 0 with direction 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am wondering if you had any hint for me, why data is still not having the correct data but just the old, uninitialized values, and why I don't get any error.
</span><br>
<p>My first guess would be that you created the MPI_data datatype incorrectly; that's what you should probably check into.
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
<li><strong>Next message:</strong> <a href="22275.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Previous message:</strong> <a href="22273.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<li><strong>In reply to:</strong> <a href="22265.php">Patrick Br&#195;&#188;ckner: "[OMPI users] Trouble with MPI_Recv not filling buffer"</a>
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
