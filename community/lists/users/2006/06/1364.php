<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  2 11:41:40 2006" -->
<!-- isoreceived="20060602154140" -->
<!-- sent="Fri, 02 Jun 2006 09:41:30 -0600" -->
<!-- isosent="20060602154130" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and Dual Core (machinefile)" -->
<!-- id="44805C2A.9070700_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="op.taiyodi0ies9li_at_rygel.local" -->
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
<strong>Date:</strong> 2006-06-02 11:41:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1365.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>Previous message:</strong> <a href="1363.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>In reply to:</strong> <a href="1363.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1365.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>Reply:</strong> <a href="1365.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
Hi Troy<br>
<br>
I'm not sure what iteration of Linux you are using, but the 2.6 kernel
has multi-core scheduling support that is supposed to resolve this
problem. I don't remember if it has to be explicitly enabled or not -
or if it only started with a particular 2.6.x release. You might want
to check into it.<br>
<br>
Ralph<br>
<br>
<br>
Troy Telford wrote:
<blockquote cite="midop.taiyodi0ies9li@rygel.local" type="cite">
  <pre wrap="">On Fri, 02 Jun 2006 09:15:06 -0600, Troy Telford  
<a class="moz-txt-link-rfc2396E" href="mailto:ttelford@linuxnetworx.com">&lt;ttelford@linuxnetworx.com&gt;</a> wrote:
  </pre>
  <blockquote type="cite">
    <blockquote type="cite">
      <pre wrap="">Can you confirm that your Linux installation thinks that it has 4
processors and will schedule 4 processes simultaneously?
      </pre>
    </blockquote>
  </blockquote>
  <pre wrap=""><!---->
D'oh.  Still too early in the morning...

OK, Linux thinks it has two CPUs.  Period.

For some reason I forgot that 'cpuinfo' simply returns what the CPU  
reports... so the CPU knows it's dual-core, and reports this.  That  
doesn't mean Linux has to recognize that there are really 4 CPUs...

So, problem solved (at least from Open MPI's standpoint...)
  </pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1365.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>Previous message:</strong> <a href="1363.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>In reply to:</strong> <a href="1363.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1365.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>Reply:</strong> <a href="1365.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
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
