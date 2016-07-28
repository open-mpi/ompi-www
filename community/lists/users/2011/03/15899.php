<?
$subject_val = "[OMPI users] Error in Binding MPI Process to a socket";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 13:26:45 2011" -->
<!-- isoreceived="20110317172645" -->
<!-- sent="Thu, 17 Mar 2011 12:26:41 -0500" -->
<!-- isosent="20110317172641" -->
<!-- name="vaibhav dutt" -->
<!-- email="vaibhavsupersaiyan9_at_[hidden]" -->
<!-- subject="[OMPI users] Error in Binding MPI Process to a socket" -->
<!-- id="AANLkTimncG8YoEJDQSoweDnMbkVDnmepvig0TuRVop9u_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Error in Binding MPI Process to a socket<br>
<strong>From:</strong> vaibhav dutt (<em>vaibhavsupersaiyan9_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-17 13:26:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15900.php">Ralph Castain: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>Previous message:</strong> <a href="15898.php">Jeff Squyres: "Re: [OMPI users] gadget2 infiniband openmpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15900.php">Ralph Castain: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>Reply:</strong> <a href="15900.php">Ralph Castain: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to perform an experiment in which I can spawn 2 MPI processes,
<br>
one on each socket in a 4 core node
<br>
having 2 dual cores. I used the option  &quot;bind to socket&quot; which mpirun for
<br>
that but I am getting an error like:
<br>
<p>An attempt was made to bind a process to a specific hardware topology
<br>
mapping (e.g., binding to a socket) but the operating system does not
<br>
support such topology-aware actions.  Talk to your local system
<br>
administrator to find out if your system can support topology-aware
<br>
functionality (e.g., Linux Kernels newer than v2.6.18).
<br>
<p>Systems that do not support processor topology-aware functionality cannot
<br>
use &quot;bind to socket&quot; and other related functionality.
<br>
<p><p>Can anybody please tell me what is this error about. Is there any other
<br>
option than &quot;bind to socket&quot;
<br>
that I can use.
<br>
<p>Thanks.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15899/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15900.php">Ralph Castain: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>Previous message:</strong> <a href="15898.php">Jeff Squyres: "Re: [OMPI users] gadget2 infiniband openmpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15900.php">Ralph Castain: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>Reply:</strong> <a href="15900.php">Ralph Castain: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
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
