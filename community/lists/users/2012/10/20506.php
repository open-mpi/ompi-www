<?
$subject_val = "[OMPI users] openmpi-1.6.2 and registerable memory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 17 23:46:50 2012" -->
<!-- isoreceived="20121018034650" -->
<!-- sent="Wed, 17 Oct 2012 22:46:46 -0500" -->
<!-- isosent="20121018034646" -->
<!-- name="Alan Wild" -->
<!-- email="alan_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.6.2 and registerable memory" -->
<!-- id="CAATyho6hW=NcPaheJPm3-facQrqCbeiHa4eGMCf_wtcymZFPxA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.6.2 and registerable memory<br>
<strong>From:</strong> Alan Wild (<em>alan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-17 23:46:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20507.php">marco atzeri: "Re: [OMPI users] Question on ssh search path"</a>
<li><strong>Previous message:</strong> <a href="20505.php">Ralph Castain: "Re: [OMPI users] Question on ssh search path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20508.php">Iliev, Hristo: "Re: [OMPI users] openmpi-1.6.2 and registerable memory"</a>
<li><strong>Reply:</strong> <a href="20508.php">Iliev, Hristo: "Re: [OMPI users] openmpi-1.6.2 and registerable memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I recently installed 1.6.2 on our cluster only to be introduced to the new
<br>
warning messages concerning registerable memory and physical memory.
<br>
OpenMPI is indicating:
<br>
<p>&nbsp;&nbsp;Registerable memory:     32768 MiB
<br>
&nbsp;&nbsp;Total memory:            48434 MiB
<br>
Which is clearly less than the &quot;3/4 total memory&quot; that produces the
<br>
warning.  However, our systems 1) have swap completely disabled and 2)
<br>
we've set the Linux kernel's vm behavior to disable overcommits.  (i.e.
<br>
/proc/sys/vm/overcommit_memory == 2).  So I'm not sure the guidance of
<br>
setting Registerable memory to twice physical memory makes sense.  Worse
<br>
still, I don't believe I can increase the log_num_mtt (or log_mtts_per_seg)
<br>
as the any increase in these values would push cause registerable memory to
<br>
double (and exceed total memory).
<br>
<p>OR... am I misunderstanding the situation?  (Maybe it would be okay to have
<br>
more registerable memory if the drivers will properly handle the failed
<br>
malloc once they try and allocated memory beynd the physical memory).
<br>
<p>So, in light of our vm and swap setting, would it still be appropriate to
<br>
increase log_num_mtt?  If not, can we at least get a setting to suppress
<br>
the warning message or (can the 3/4 threshold be lowered slightly
<br>
perhaps 67% of total memory)?
<br>
<p>Changing the vm or swap behavior is probably out of the question on our
<br>
systems.  Our system stability improved dramatically when we went to these
<br>
settings (over the Linux default) as our systems would never OOM properly.
<br>
<p>-Alan
<br>
<p><pre>
-- 
alan_at_[hidden] <a href="http://humbleville.blogspot.com">http://humbleville.blogspot.com</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20506/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20507.php">marco atzeri: "Re: [OMPI users] Question on ssh search path"</a>
<li><strong>Previous message:</strong> <a href="20505.php">Ralph Castain: "Re: [OMPI users] Question on ssh search path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20508.php">Iliev, Hristo: "Re: [OMPI users] openmpi-1.6.2 and registerable memory"</a>
<li><strong>Reply:</strong> <a href="20508.php">Iliev, Hristo: "Re: [OMPI users] openmpi-1.6.2 and registerable memory"</a>
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
