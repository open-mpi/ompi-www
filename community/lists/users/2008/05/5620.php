<?
$subject_val = "Re: [OMPI users] machines swapping in running job[Scanned]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 12:08:26 2008" -->
<!-- isoreceived="20080507160826" -->
<!-- sent="Wed, 07 May 2008 17:08:14 +0100" -->
<!-- isosent="20080507160814" -->
<!-- name="Arif Ali" -->
<!-- email="aali_at_[hidden]" -->
<!-- subject="Re: [OMPI users] machines swapping in running job[Scanned]" -->
<!-- id="4821D3EE.1080709_at_ocf.co.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="MAILSERVERbyoxxSQWB00001ac8_at_ocf.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] machines swapping in running job[Scanned]<br>
<strong>From:</strong> Arif Ali (<em>aali_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-07 12:08:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5621.php">Alberto Giannetti: "[OMPI users] MPE"</a>
<li><strong>Previous message:</strong> <a href="5619.php">Gabriele FATIGATI: "Re: [OMPI users] Problem with AlltoAll routine"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/04/5451.php">Arif Ali: "[OMPI users] machines swapping in running job[Scanned]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5645.php">Jeff Squyres: "Re: [OMPI users] machines swapping in running job[Scanned]"</a>
<li><strong>Reply:</strong> <a href="5645.php">Jeff Squyres: "Re: [OMPI users] machines swapping in running job[Scanned]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Arif --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the delay in replying.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Believe it or not, almost this exact issue just came up with the IBM  
</span><br>
<span class="quotelev1">&gt; Benchmark Center; they were using Open MPI with MPIRandomAccess and  
</span><br>
<span class="quotelev1">&gt; experiencing problems with running out of memory.  We didn't get a  
</span><br>
<span class="quotelev1">&gt; full set of data and experiments run; it was somewhat odd that the  
</span><br>
<span class="quotelev1">&gt; problem seemed to happen most often with the Intel compilers  
</span><br>
<span class="quotelev1">&gt; (preliminary tests shows that we couldn't replicate the problem with  
</span><br>
<span class="quotelev1">&gt; the gcc compiler on the same problem size).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, the IBM Benchmark Center engineers were able to get  
</span><br>
<span class="quotelev1">&gt; successful runs in by using the btl_openib_free_list_max MCA  
</span><br>
<span class="quotelev1">&gt; parameter.  This parameter essentially limits how much space the  
</span><br>
<span class="quotelev1">&gt; lowest-level IB driver in OMPI uses for fragment lists (it's actually  
</span><br>
<span class="quotelev1">&gt; fairly complex as to what it exactly does and how it helps in this  
</span><br>
<span class="quotelev1">&gt; situation -- insert &quot;waving hands&quot; image here...).  This parameter  
</span><br>
<span class="quotelev1">&gt; defaults to &quot;infinite&quot;.  Setting it to a finite value can allow  
</span><br>
<span class="quotelev1">&gt; MPIRandomAccess to complete; I believe that the IBC engineers used  
</span><br>
<span class="quotelev1">&gt; values of 2000 and 4000 for their systems.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
thanks, that's great, that worked
<br>
<p>we are also using IBM machines (IBM x3455) but we are using the gcc 
<br>
compiler that comes default with SLES 10
<br>
<p>I have successfully run the HPCC using values 2048, 4096 and 8192; I 
<br>
have kept this now at 2048 and continue testing.
<br>
<p>Is it better if this value to be high or low?
<br>
<p>regards,
<br>
<p><pre>
-- 
Arif Ali
Software Engineer
OCF plc
Mobile: +44 (0)7970 148 122         
DDI:    +44 (0)114 257 2240
Office: +44 (0)114 257 2200         
Fax:    +44 (0)114 257 0022
Email:  aali_at_[hidden]              
Web:    <a href="http://www.ocf.co.uk">http://www.ocf.co.uk</a>
Support Phone:   +44 (0)845 702 3829
Support E-mail:  support_at_[hidden]
Skype:  arif_ali80                  
MSN:    aali_at_[hidden]
This email is confidential in that it is intended for the exclusive 
attention of the addressee(s) indicated. If you are not the intended 
recipient, this email should not be read or disclosed to any other 
person. Please notify the sender immediately and delete this email from 
your computer system. Any opinions expressed are not necessarily those 
of the company from which this email was sent and, whilst to the best of
our knowledge no viruses or defects exist, no responsibility can be 
accepted for any loss or damage arising from its receipt or subsequent 
use of this email. 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5621.php">Alberto Giannetti: "[OMPI users] MPE"</a>
<li><strong>Previous message:</strong> <a href="5619.php">Gabriele FATIGATI: "Re: [OMPI users] Problem with AlltoAll routine"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/04/5451.php">Arif Ali: "[OMPI users] machines swapping in running job[Scanned]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5645.php">Jeff Squyres: "Re: [OMPI users] machines swapping in running job[Scanned]"</a>
<li><strong>Reply:</strong> <a href="5645.php">Jeff Squyres: "Re: [OMPI users] machines swapping in running job[Scanned]"</a>
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
