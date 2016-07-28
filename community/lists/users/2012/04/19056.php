<?
$subject_val = "Re: [OMPI users] send/recv implementation details";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 19 16:11:22 2012" -->
<!-- isoreceived="20120419201122" -->
<!-- sent="Thu, 19 Apr 2012 16:11:17 -0400" -->
<!-- isosent="20120419201117" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send/recv implementation details" -->
<!-- id="A819F753-A401-4BD8-9C50-6360BEA3F65D_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F8FEEAA.2010308_at_dps.uibk.ac.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] send/recv implementation details<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-19 16:11:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19057.php">Eloi Gaudry: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="19055.php">Bernhard Knapp: "Re: [OMPI users] hostname not known only in fedora 15"</a>
<li><strong>In reply to:</strong> <a href="19050.php">Simone Pellegrini: "[OMPI users] send/recv implementation details"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Simone,
<br>
<p>I think most of the issues with the numbers you're getting are coming from the internal protocols of Open MPI and the way the compilers &quot;optimize&quot; the memcpy function. In fact the memcpy function translate to different execution path based on the size of the data. For large memory copies MMX or SSExxx instructions are used. For smaller copies some compilers use the movsb instruction to implement the memcpy. This leads to a significantly smaller number of branches in the PAPI reading, because the movsb __always__ counts as a single branch.
<br>
<p>In a similar context we ended up highjacking the memcpy function in order to be able to count the number of branches/misses/instructions and then remove it from the number seen by the upper level. This gives a more consistent view of the number of branches as the compiler choice of the memcpy variant is outside your counting.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p>On Apr 19, 2012, at 06:53 , Simone Pellegrini wrote:
<br>
<p><span class="quotelev1">&gt; Enough with the context, this is what I am observing. At 16 MB there is a clear increase in the number of instructions and branch instructions (and this can be explained by my settings of eager_limit and max send size).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However something weird already happens at 32K where I clearly see an increase in the number of branches and total instructions. The fact is that there are almost 0 branch instructions until 32KB and starting from 32KB to 16MB there is a linear increase. At 16MB there is another jump and then again linear increase.
</span><br>
<span class="quotelev1">&gt; It seems that there is another threshold driving this behavior. I tried to set these other parameters for the SM BTL, btl_sm_fifo_size, btl_sm_exclusivity but nothing changed. For my understanding of MPI, this should be a kind of pipe-lining of the message which is being transferred by chunks (of probably 32KB size).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can I override this behavior? Is there any parameter I can set?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also noticed that while this is happening for the MPI_Send, the MPI_Recv operation behaves differently. For the receive routine there is no bump in terms of branch and total instructions. The increase is linear starting from 64 bytes. The increase of branch instructions slows down however after the 16MB threshold. My idea about that is that probably the receive is busy waiting for the message and therefore the number of branches grows proportionally with the time spent for the message to arrive.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is my hypothesis but you probably know better.
</span><br>
<span class="quotelev1">&gt; graphs are attached. Thanks in advance for your help.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19057.php">Eloi Gaudry: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="19055.php">Bernhard Knapp: "Re: [OMPI users] hostname not known only in fedora 15"</a>
<li><strong>In reply to:</strong> <a href="19050.php">Simone Pellegrini: "[OMPI users] send/recv implementation details"</a>
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
