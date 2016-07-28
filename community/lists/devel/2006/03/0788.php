<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 10:19:32 2006" -->
<!-- isoreceived="20060331151932" -->
<!-- sent="Fri, 31 Mar 2006 17:19:26 +0200 (CEST)" -->
<!-- isosent="20060331151926" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="Pine.LNX.4.64.0603311656390.18735_at_dingo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CA0DA839-294F-49E2-8E4A-BD6275186D1C_at_open-mpi.org" -->
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
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-31 10:19:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0789.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0787.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0783.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0795.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0795.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 31 Mar 2006, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; Are your hosts configured for both IPv4 and IPv6 traffic (or are they
</span><br>
<span class="quotelev1">&gt; IPv6 only)?
</span><br>
<p>This is a big question and one that basically stopped me from adding 
<br>
IPv6 support to LAM/MPI some 3 years ago. There are several things 
<br>
that have to be considered:
<br>
<p>- are all computers that should participate in a job configured 
<br>
similarly (only IPv6 or both IPv4 and IPv6) ? If not all are, then 
<br>
should some part of the computers communicate over one protocol and 
<br>
the rest over the other ? I think that this split coomunication would 
<br>
be easier now with OpenMPI than it was with LAM/MPI (which supported 
<br>
pretty much only one communication channel at a time), but this means 
<br>
that the routing decisions might get tougher.
<br>
<p>- a related point is whether the 2 protocols should really be regarded 
<br>
as 2 different communication channels. OpenMPI is able to use several 
<br>
communication channels between 2 processes/MPI ranks at the same time, 
<br>
so should the same physical interface be split between the 2 logical 
<br>
protocols for communication between the same pair of computers ?
<br>
<p>- related to the one above, if both IPv4 and IPv6 are available, which 
<br>
one should be used ?
<br>
<p>- the IP addresses are also used for starting up the daemons on remote 
<br>
computers. I can't remember all details clearly, but I think that the 
<br>
OpenSSH sshd would discover the IPv6 interface and would only allow 
<br>
that one for incoming connections (and would use the IPv6 address as 
<br>
part of the authentication process)... which leads to stronger ties 
<br>
between the addresses specified in the hostfile and the configuration 
<br>
of the computers. For example, if the remote computer has IPv6 
<br>
configured but the sshd is restricted to bind to IPv4, then a ssh 
<br>
connection to this computer using the IPv6 address (which would be 
<br>
specified in the hostfile) will fail, while OpenMPI processes (daemons 
<br>
and children) would not have any problem in using the IPv6 address. So 
<br>
there might be some need of both IPv4 and IPv6 addresses of the same 
<br>
computer to be known, maybe via DNS or maybe via some user-provided 
<br>
mapping.
<br>
<p>That's all that I remember now from my IPv6 endeavour with LAM/MPI. 
<br>
IMHO, some discussion of them should occur before the actual coding...
<br>
<p><pre>
-- 
Bogdan Costescu
IWR - Interdisziplinaeres Zentrum fuer Wissenschaftliches Rechnen
Universitaet Heidelberg, INF 368, D-69120 Heidelberg, GERMANY
Telephone: +49 6221 54 8869, Telefax: +49 6221 54 8868
E-mail: Bogdan.Costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0789.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0787.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0783.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0795.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0795.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
