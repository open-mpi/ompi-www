<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 30 12:50:54 2006" -->
<!-- isoreceived="20061130175054" -->
<!-- sent="Thu, 30 Nov 2006 09:50:45 -0800" -->
<!-- isosent="20061130175045" -->
<!-- name="Dave Grote" -->
<!-- email="dpgrote_at_[hidden]" -->
<!-- subject="Re: [OMPI users] x11 forwarding" -->
<!-- id="456F19F5.9080206_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="665EB4C5-DD11-4997-9F50-C226D5921E67_at_lanl.gov" -->
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
<strong>From:</strong> Dave Grote (<em>dpgrote_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-30 12:50:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2260.php">Ralph H Castain: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Previous message:</strong> <a href="2258.php">Galen Shipman: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="2257.php">Galen Shipman: "Re: [OMPI users] x11 forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2260.php">Ralph H Castain: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Reply:</strong> <a href="2260.php">Ralph H Castain: "Re: [OMPI users] x11 forwarding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
<br>
I'm using caos linux (developed at LBL), which has the wrapper wwmpirun
around mpirun, so my command is something like<br>
wwmpirun -np 8 -- -x PYTHONPATH --mca pls_rsh_agent '"ssh -X"'
/usr/local/bin/pyMPI<br>
This is essentially the same as<br>
mpirun -np 8 -x PYTHONPATH --mca pls_rsh_agent '"ssh -X"'
/usr/local/bin/pyMPI<br>
but wwmpirun does the scheduling, for example looking for idle nodes
and creating the host file.<br>
My system is setup with a master/login node which is running a full
version of linux and slave nodes that run a reduced linux (that
includes access to the X libraries). wwmmpirun always picks the slaves
nodes to run on. I've also tried "ssh -Y" and it doesn't help. I've set
xhost for the slave nodes in my login shell on the master and that
didn't work. XForwarding is enabled on all of the nodes, so that's not
the problem.<br>
<br>
I am able to get it to work by having wwmpirun do the command "ssh -X
nodennnn xclock" before starting the parallel program on that same
node, but this only works for the first person who logs into the master
and gets DISPLAY=localhost:10. When someone else tries to run a
parallel job, its seems that DISPLAY is set to localhost:10 on the
slaves and tries to forward through that other persons login with the
same display number and the connection is refused because of wrong
authentication. This seems like very odd behavior. I'm aware that this
may be an issue with the X server (xorg) or with the version of linux,
so I am also seeking help from the person who maintains caos linux. If
it matters, the machine uses myrinet for the interconnects.<br>
&nbsp; Thanks!<br>
&nbsp;&nbsp;&nbsp;&nbsp; Dave<br>
<br>
Galen Shipman wrote:
<blockquote cite="mid665EB4C5-DD11-4997-9F50-C226D5921E67@lanl.gov"
 type="cite">
  <pre wrap="">what does your command line look like?

- Galen

On Nov 29, 2006, at 7:53 PM, Dave Grote wrote:

  </pre>
  <blockquote type="cite">
    <pre wrap="">I cannot get X11 forwarding to work using mpirun. I've tried all of  
the
standard methods, such as setting pls_rsh_agent = ssh -X, using xhost,
and a few other things, but nothing works in general. In the FAQ,
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/faq/?category=running#mpirun-gui">http://www.open-mpi.org/faq/?category=running#mpirun-gui</a>, a  
reference is
made to other methods, but "they involve sophisticated X forwarding
through mpirun", and no further explanation is given. Can someone tell
me what these other methods are or point me to where I can find  
info on
them? I've done lots of google searching and havn't found anything
useful. This is a major issue since my parallel code heavily  
depends on
having the ability to open X windows on the remote machine. Any and  
all
help would be appreciated!
  Thanks!
     Dave
_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
    </pre>
  </blockquote>
  <pre wrap=""><!---->
_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

  </pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2260.php">Ralph H Castain: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Previous message:</strong> <a href="2258.php">Galen Shipman: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="2257.php">Galen Shipman: "Re: [OMPI users] x11 forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2260.php">Ralph H Castain: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Reply:</strong> <a href="2260.php">Ralph H Castain: "Re: [OMPI users] x11 forwarding"</a>
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
