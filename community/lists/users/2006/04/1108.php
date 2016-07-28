<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 20 20:31:33 2006" -->
<!-- isoreceived="20060421003133" -->
<!-- sent="Thu, 20 Apr 2006 18:31:28 -0600" -->
<!-- isosent="20060421003128" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI and TCP port range" -->
<!-- id="444827E0.2070909_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF7086B6_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-04-20 20:31:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="1107.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI and SLURM configuration ?"</a>
<li><strong>In reply to:</strong> <a href="1106.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open-MPI and TCP port range"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1121.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] Open-MPI and TCP port range"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
Just as a further point here - the biggest issue with making a routable
public IP address is deciding what that address should be. This is not
a simple problem as (a) we operate exclusively at the user level, and
so (b) we can't define a single address that we can reliably know from
a remote location (we would need at least one for every user, which
isn't a feasible solution). Our solution so far is to launch a "probe"
process on the publicly-accessible node and have it check a known
location on the file system for the IP address of the accessible
"router" for this user.<br>
<br>
Not a perfect solution by any means - but that's where we are for now.<br>
Ralph<br>
<br>
<br>
Jeff Squyres (jsquyres) wrote:
<blockquote
 cite="midC835B9C9CB0F1C4E9DA48913C9E8F8AF7086B6@xmb-rtp-215.amer.cisco.com"
 type="cite">
  <blockquote type="cite">
    <pre wrap="">-----Original Message-----
From: <a class="moz-txt-link-abbreviated" href="mailto:users-bounces@open-mpi.org">users-bounces@open-mpi.org</a> 
[<a class="moz-txt-link-freetext" href="mailto:users-bounces@open-mpi.org">mailto:users-bounces@open-mpi.org</a>] On Behalf Of Bogdan Costescu
Sent: Thursday, April 20, 2006 10:32 AM
To: Open MPI Users
Subject: Re: [OMPI users] Open-MPI and TCP port range

On Thu, 20 Apr 2006, Jeff Squyres (jsquyres) wrote:

    </pre>
    <blockquote type="cite">
      <pre wrap="">Right now, there is no way to restrict the port range that Open MPI
will use. ... If this becomes a problem for you (i.e., the random
MPI-chose-the-same-port-as-your-app events happen a lot), let us
know and we can probably put in some controls to work around this.
      </pre>
    </blockquote>
    <pre wrap="">I would welcome a discussion about this; on the LAM/MPI lists several
people asked for a limited port range to allow them to pass through
firewalls or to do tunneling.
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Recall that we didn't end up doing this in LAM because limiting the port
ranges is not necessarily sufficient to allow you to run parallel
computing spanning firewalls.  The easiest solution is to have a single
routing entity that can be exposed publicly (in front of the firewall,
either virtually or physically) that understands MPI -- so that MPI
processes outside the firewall can send to this entity and it routes the
messages to the appropriate back-end MPI process.  This routable entity
does not exist for LAM (*), and does not yet exist for Open MPI (there
have been discussions about creating it, but nothing has been done about
it).

(*) Disclaimer: the run-time environment for LAM actually does support
this kind of routing, but we stopped actively maintaining it years ago
-- it may or may not work at the MPI layer.

Other scenarios are also possible, two of which include:

1. make a virtual public IP address in front of the firewall for each
back-end node.  MPI processes who send data to the public IP address
will be routed [by the firewall] back to the back-end node.

2. use a single virtual public IP address in front of the firewall with
N ports open.  MPI processes who send data to the public IP address
dispatch to the back-end node [by the firewall] based on the port
number.

Both of these require opening a bunch of holes in the firewall which is
at least somewhat unattractive.

So probably the best solution is to have an MPI-level routable entity
that can do this stuff.  Then you only need one public IP address and
potentially a small number of ports opened.

That being said, we are not opposed to putting port number controls in
Open MPI.  Especially if it really is a problem for someone, not just a
hypothetical problem ;-).  But such controls should not be added to
support firewalled operations, because -- at a minimum -- unless you do
a bunch of other firewall configuration, it will not be enough.

  </pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="1107.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI and SLURM configuration ?"</a>
<li><strong>In reply to:</strong> <a href="1106.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open-MPI and TCP port range"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1121.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] Open-MPI and TCP port range"</a>
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
