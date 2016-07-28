<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr  3 16:11:38 2007" -->
<!-- isoreceived="20070403201138" -->
<!-- sent="Tue, 3 Apr 2007 16:11:31 -0400" -->
<!-- isosent="20070403201131" -->
<!-- name="Xie, Hugh" -->
<!-- email="hugh.xie_at_[hidden]" -->
<!-- subject="[OMPI users] Mpirun failed for machines not in the same subnet." -->
<!-- id="515C1EEC6C326C4C8822294F0A73E6A205727138_at_njpcmg1exms317.leh.lbcorp.lehman.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="515C1EEC6C326C4C8822294F0A73E6A205727137_at_njpcmg1exms317.leh.lbcorp.lehman.com" -->
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
<strong>From:</strong> Xie, Hugh (<em>hugh.xie_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-03 16:11:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2994.php">Jeff Squyres: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<li><strong>Previous message:</strong> <a href="2992.php">Heywood, Todd: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2994.php">Jeff Squyres: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<li><strong>Reply:</strong> <a href="2994.php">Jeff Squyres: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I got the follow error message while running: 'mpirun -v -np 2
<br>
-machinefile hosts.txt testc.x'
<br>
<p>Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
<br>
If you specified the use of a BTL component, you may have
<br>
forgotten a component (such as &quot;self&quot;) in the list of 
<br>
usable components.
<br>
------------------------------------------------------------------------
<br>
<pre>
--
------------------------------------------------------------------------
--
Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
If you specified the use of a BTL component, you may have
forgotten a component (such as &quot;self&quot;) in the list of 
usable components.
------------------------------------------------------------------------
--
------------------------------------------------------------------------
--
It looks like MPI_INIT failed for some reason; your parallel process is
likely to abort.  There are many reasons that a parallel process can
fail during MPI_INIT; some of which are due to configuration or
environment
problems.  This failure appears to be an internal failure; here's some
additional information (which may only be relevant to an Open MPI
developer):
  PML add procs failed
  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
------------------------------------------------------------------------
--
The same commands works if the content in hosts.txt is in same subnet.
Once I switch to hosts in different subnet, it stop working. I am using
ompi 1.2.
Please help.
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
This message is intended only for the personal and confidential use of the designated recipient(s) named above.  If you are not the intended recipient of this message you are hereby notified that any review, dissemination, distribution or copying of this message is strictly prohibited.  This communication is for information purposes only and should not be regarded as an offer to sell or as a solicitation of an offer to buy any financial product, an official confirmation of any transaction, or as an official statement of Lehman Brothers.  Email transmission cannot be guaranteed to be secure or error-free.  Therefore, we do not represent that this information is complete or accurate and it should not be relied upon as such.  All information is subject to change without notice.
--------
IRS Circular 230 Disclosure:
Please be advised that any discussion of U.S. tax matters contained within this communication (including any attachments) is not intended or written to be used and cannot be used for the purpose of (i) avoiding U.S. tax related penalties or (ii) promoting, marketing or recommending to another party any transaction or matter addressed herein.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2994.php">Jeff Squyres: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<li><strong>Previous message:</strong> <a href="2992.php">Heywood, Todd: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2994.php">Jeff Squyres: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<li><strong>Reply:</strong> <a href="2994.php">Jeff Squyres: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
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
