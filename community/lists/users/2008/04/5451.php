<?
$subject_val = "[OMPI users] machines swapping in running job[Scanned]";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 12:10:18 2008" -->
<!-- isoreceived="20080422161018" -->
<!-- sent="Tue, 22 Apr 2008 17:10:10 +0100" -->
<!-- isosent="20080422161010" -->
<!-- name="Arif Ali" -->
<!-- email="aali_at_[hidden]" -->
<!-- subject="[OMPI users] machines swapping in running job[Scanned]" -->
<!-- id="480E0DE2.2090809_at_ocf.co.uk" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] machines swapping in running job[Scanned]<br>
<strong>From:</strong> Arif Ali (<em>aali_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-22 12:10:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5452.php">George Bosilca: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5450.php">Jeff Squyres: "Re: [OMPI users] Message compression in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5601.php">Jeff Squyres: "Re: [OMPI users] machines swapping in running job[Scanned]"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5601.php">Jeff Squyres: "Re: [OMPI users] machines swapping in running job[Scanned]"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5620.php">Arif Ali: "Re: [OMPI users] machines swapping in running job[Scanned]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi list,
<br>
<p>I had a similar problem last year with IMB when the the job would just 
<br>
hang on a PowerPC cluster, for which Jeff Sqyres gave me many pointers 
<br>
to change paramaters to fix the problem. Now with another cluster that I 
<br>
am building the IMB job hangs in the same place and also the machines in 
<br>
the cluster start swapping at the time of the hang. Following from what 
<br>
Jeff suggested I have tried the following mca paramaters
<br>
<p>btl_openib_flags=1
<br>
btl_openib_ib_timeout=20
<br>
mpool_base_verbose=1
<br>
mpool_base_use_mem_hooks=1
<br>
btl_openib_eager_limit=3072
<br>
#btl_openib_eager_limit=4096
<br>
btl_openib_max_send_size=12288
<br>
<p>After setting these paramaters, the machines swapped, but a lot less 
<br>
than before and got a lot further in the run and ran to completion. Are 
<br>
there any further suggestions on paramaters that can be tweaked to get 
<br>
these machines not to swap.
<br>
<p>I am also having the same swapping issue when running the HPCC benchmark 
<br>
when it reaches the MPIRandomAccess where  it swaps on all machines and 
<br>
we can no longer access them and therefore we have to reboot the machines.
<br>
<p>OS: SLES 10
<br>
Kernel: 2.6.16.46-0.12-smp
<br>
OFED release: 1.3
<br>
openmpi: 1.2.5 and 1.2.6 using btl openib
<br>
Switch: TopSpin
<br>
SM: on TopSpin switch
<br>
Ulimit has been set to unlimited as suggested in the FAQ
<br>
<p>One thing to note, Both jobs run with no problems using TCP.
<br>
<p><p>regards,
<br>
<pre>
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
<li><strong>Next message:</strong> <a href="5452.php">George Bosilca: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5450.php">Jeff Squyres: "Re: [OMPI users] Message compression in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5601.php">Jeff Squyres: "Re: [OMPI users] machines swapping in running job[Scanned]"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5601.php">Jeff Squyres: "Re: [OMPI users] machines swapping in running job[Scanned]"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5620.php">Arif Ali: "Re: [OMPI users] machines swapping in running job[Scanned]"</a>
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
