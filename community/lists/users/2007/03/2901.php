<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 23 13:58:14 2007" -->
<!-- isoreceived="20070323175814" -->
<!-- sent="Fri, 23 Mar 2007 11:58:10 -0600" -->
<!-- isosent="20070323175810" -->
<!-- name="Marcus G. Daniels" -->
<!-- email="mdaniels_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cell EIB support for OpenMPI" -->
<!-- id="46041532.8070003_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4602D84B.8070700_at_lanl.gov" -->
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
<strong>From:</strong> Marcus G. Daniels (<em>mdaniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-23 13:58:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2902.php">Walker, David T.: "[OMPI users] Failure to launch on a remote node.  SSH problem?"</a>
<li><strong>Previous message:</strong> <a href="2900.php">Ashley Pittman: "Re: [OMPI users] quadrics"</a>
<li><strong>In reply to:</strong> <a href="2886.php">Marcus G. Daniels: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2903.php">Mike Houston: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2903.php">Mike Houston: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Marcus G. Daniels wrote:
<br>
<span class="quotelev1">&gt; Mike Houston wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; The main issue with this, and addressed at the end 
</span><br>
<span class="quotelev2">&gt;&gt; of the report, is that the code size is going to be a problem as data 
</span><br>
<span class="quotelev2">&gt;&gt; and code must live in the same 256KB in each SPE.  They mention dynamic 
</span><br>
<span class="quotelev2">&gt;&gt; overlay loading, which is also how we deal with large code size, but 
</span><br>
<span class="quotelev2">&gt;&gt; things get tricky and slow with the potentially needed save and restore 
</span><br>
<span class="quotelev2">&gt;&gt; of registers and LS. 
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<p>I did some checking on this.   Apparently the trunk of GCC and the 
<br>
latest GNU Binutils handle overlays.   Because the SPU compiler knows of 
<br>
its limits address space, the ELF object code sections reflect this, and 
<br>
the the linker can transparently generate stubs to trigger the 
<br>
loading.   GCC also has options like -ffunction-sections that enable the 
<br>
linker to optimize for locality. 
<br>
<p>So even though the OpenMPI shared libraries in total appear to have a 
<br>
footprint about four times too big for code alone (don't know about the 
<br>
typical stack &amp; heap requirements), perhaps it's still doable without a 
<br>
big effort to strip down OpenMPI?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2902.php">Walker, David T.: "[OMPI users] Failure to launch on a remote node.  SSH problem?"</a>
<li><strong>Previous message:</strong> <a href="2900.php">Ashley Pittman: "Re: [OMPI users] quadrics"</a>
<li><strong>In reply to:</strong> <a href="2886.php">Marcus G. Daniels: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2903.php">Mike Houston: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2903.php">Mike Houston: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
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
