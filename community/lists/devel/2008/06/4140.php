<?
$subject_val = "Re: [OMPI devel] BW benchmark hangs after r 18551";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 07:10:20 2008" -->
<!-- isoreceived="20080617111020" -->
<!-- sent="Tue, 17 Jun 2008 13:10:06 +0200" -->
<!-- isosent="20080617111006" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BW benchmark hangs after r 18551" -->
<!-- id="4F978D61-A9CC-4F08-AFAA-C945CD997144_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990806162254t5b8e95dfia111aab1296bdd1e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BW benchmark hangs after r 18551<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-17 07:10:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4141.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>Previous message:</strong> <a href="4139.php">Lenny Verkhovsky: "[OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>In reply to:</strong> <a href="4139.php">Lenny Verkhovsky: "[OMPI devel] BW benchmark hangs after r 18551"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4141.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>Reply:</strong> <a href="4141.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lenny,
<br>
<p>I guess you're running the latest version. If not, please update,  
<br>
Galen and myself corrected some bugs last week. If you're using the  
<br>
latest (and greatest) then ... well I imagine there is at least one  
<br>
bug left.
<br>
<p>There is a quick test you can do. In the btl_sm.c in the module  
<br>
structure at the beginning of the file, please replace the sendi  
<br>
function by NULL. If this fix the problem, then at least we know that  
<br>
it's a sm send immediate problem.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 17, 2008, at 7:54 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; Hi, George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a problem running BW benchmark on 100 rank cluster after  
</span><br>
<span class="quotelev1">&gt; r18551.
</span><br>
<span class="quotelev1">&gt; The BW is mpi_p that runs mpi_bandwidth with 100K between all pairs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #mpirun -np 100 -hostfile hostfile_w  ./mpi_p_18549 -t bw -s 100000
</span><br>
<span class="quotelev1">&gt; BW (100) (size min max avg)  100000     576.734030       
</span><br>
<span class="quotelev1">&gt; 2001.882416     1062.698408
</span><br>
<span class="quotelev1">&gt; #mpirun -np 100 -hostfile hostfile_w ./mpi_p_18551 -t bw -s 100000
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt; ( it hangs even after 10 hours ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It doesn't happen if I run --bynode or btl openib,self only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4140/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4141.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>Previous message:</strong> <a href="4139.php">Lenny Verkhovsky: "[OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>In reply to:</strong> <a href="4139.php">Lenny Verkhovsky: "[OMPI devel] BW benchmark hangs after r 18551"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4141.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>Reply:</strong> <a href="4141.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
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
