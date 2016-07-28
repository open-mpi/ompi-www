<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May  4 15:33:19 2006" -->
<!-- isoreceived="20060504193319" -->
<!-- sent="Thu, 04 May 2006 13:33:11 -0600" -->
<!-- isosent="20060504193311" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] comm_join and singleton init" -->
<!-- id="445A56F7.4080004_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20060503225116.GN25378_at_mcs.anl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-04 15:33:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1215.php">Marcelo Souza: "[OMPI users] Open MPI 1.0.2 Slackware Package"</a>
<li><strong>Previous message:</strong> <a href="1213.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>In reply to:</strong> <a href="1210.php">Robert Latham: "Re: [OMPI users] comm_join and singleton init"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
The current release of Open MPI does not support running a single
universe across multiple machines like you describe. We are currently
working on that capability on a side branch of the OpenRTE effort and
hope to begin testing it soon. Once we fully validate that
functionality, we will bring it over to Open MPI.<br>
<br>
Ralph<br>
<br>
<br>
Robert Latham wrote:
<blockquote cite="mid20060503225116.GN25378@mcs.anl.gov" type="cite">
  <pre wrap="">On Tue, Mar 14, 2006 at 12:37:52PM -0600, Edgar Gabriel wrote:
  </pre>
  <blockquote type="cite">
    <pre wrap="">I think I know what goes wrong. Since they are in different 'universes', 
they will have exactly the same 'Open MPI name', and therefore the 
algorithm in intercomm_merge can not determine which process should be 
first and which is second.

Practically, all jobs which are connected at a certain point in there 
lifetime have to be in the same MPI universe, such that all jobs will 
have different jobid's and therefore different names. To use the same 
universe, you have to start the orted daemon in the persistent mode, so 
the sequence should be:

orted --seed --persistent --scope public
mpirun -np x ./app1
mpirun -np y ./app2

In this case everything should work as expected, you could do the 
comm_join between app1 and app2 and the intercomm_merge should work as well.

Hope this helps
    </pre>
  </blockquote>
  <pre wrap=""><!---->
This was fine on a single machine.  What do you recommend for multiple
machines (e.g. app1 on node1 and app2 on node2)? How do i tell
multiple orted instances that they are part of the same universe?

thanks
==rob

  </pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1215.php">Marcelo Souza: "[OMPI users] Open MPI 1.0.2 Slackware Package"</a>
<li><strong>Previous message:</strong> <a href="1213.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>In reply to:</strong> <a href="1210.php">Robert Latham: "Re: [OMPI users] comm_join and singleton init"</a>
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
