<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 30 16:42:35 2006" -->
<!-- isoreceived="20061130214235" -->
<!-- sent="Thu, 30 Nov 2006 13:42:29 -0800" -->
<!-- isosent="20061130214229" -->
<!-- name="Dave Grote" -->
<!-- email="dpgrote_at_[hidden]" -->
<!-- subject="Re: [OMPI users] x11 forwarding" -->
<!-- id="456F5045.5000901_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C1947F5C.61C4%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-11-30 16:42:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2262.php">Marcus G. Daniels: "Re: [OMPI users] For Open MPI + BPROC users"</a>
<li><strong>Previous message:</strong> <a href="2260.php">Ralph H Castain: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>In reply to:</strong> <a href="2260.php">Ralph H Castain: "Re: [OMPI users] x11 forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2270.php">Galen Shipman: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2270.php">Galen Shipman: "Re: [OMPI users] x11 forwarding"</a>
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
I don't think that that is the problem. As far as I can tell, the
DISPLAY environment variable is being set properly on the slave (it
will sometimes have a different value than in the shell where mpirun
was executed).<br>
&nbsp; Dave<br>
<br>
Ralph H Castain wrote:
<blockquote cite="midC1947F5C.61C4%25rhc@lanl.gov" type="cite">
  <title>Re: [OMPI users] x11 forwarding</title>
  <font face="Verdana, Helvetica, Arial"><span style="font-size: 12px;">Actually,
I believe at least some of this may be a bug on our part. We currently
pickup the local environment and forward it on to the remote nodes as
the environment for use by the backend processes. I have seen quite a
few environment variables in that list, including DISPLAY, which would
create the problem you are seeing.<br>
  <br>
I&#8217;ll have to chat with folks here to understand what part of the
environment we absolutely need to carry forward, and what parts we need
to &#8220;cleanse&#8221; before passing it along.<br>
  <br>
Ralph<br>
  <br>
  <br>
On 11/30/06 10:50 AM, "Dave Grote" <a class="moz-txt-link-rfc2396E" href="mailto:dpgrote@lbl.gov">&lt;dpgrote@lbl.gov&gt;</a> wrote:<br>
  <br>
  </span></font>
  <blockquote><font face="Verdana, Helvetica, Arial"><span
 style="font-size: 12px;"><br>
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
&nbsp;&nbsp;Thanks!<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave<br>
    <br>
Galen Shipman wrote: <br>
    </span></font>
    <blockquote><font face="Verdana, Helvetica, Arial"><span
 style="font-size: 12px;"> <br>
what does your command line look like?<br>
      <br>
- Galen<br>
      <br>
On Nov 29, 2006, at 7:53 PM, Dave Grote wrote:<br>
      <br>
&nbsp;&nbsp;<br>
&nbsp;<br>
      </span></font>
      <blockquote><font face="Verdana, Helvetica, Arial"><span
 style="font-size: 12px;"> <br>
I cannot get X11 forwarding to work using mpirun. I've tried all of &nbsp;<br>
the<br>
standard methods, such as setting pls_rsh_agent = ssh -X, using xhost,<br>
and a few other things, but nothing works in general. In the FAQ,<br>
        <a
 href="http://www.open-mpi.org/faq/?category=running#mpirun-gui,">http://www.open-mpi.org/faq/?category=running#mpirun-gui,</a>
a &nbsp;<br>
reference is<br>
made to other methods, but "they involve sophisticated X forwarding<br>
through mpirun", and no further explanation is given. Can someone tell<br>
me what these other methods are or point me to where I can find &nbsp;<br>
info on<br>
them? I've done lots of google searching and havn't found anything<br>
useful. This is a major issue since my parallel code heavily &nbsp;<br>
depends on<br>
having the ability to open X windows on the remote machine. Any and &nbsp;<br>
all<br>
help would be appreciated!<br>
&nbsp;&nbsp;Thanks!<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave<br>
_______________________________________________<br>
users mailing list<br>
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a><br>
        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;<br>
        </span></font></blockquote>
      <font face="Verdana, Helvetica, Arial"><span
 style="font-size: 12px;"> <br>
      <br>
_______________________________________________<br>
users mailing list<br>
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a><br>
      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br>
      <br>
&nbsp;&nbsp;<br>
      </span></font></blockquote>
    <font face="Verdana, Helvetica, Arial"><span
 style="font-size: 12px;"><br>
    <hr align="center" size="3" width="95%"></span></font><span
 style="font-size: 12px;"><font face="Monaco, Courier New">_______________________________________________<br>
users mailing list<br>
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a><br>
    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br>
    </font></span></blockquote>
  <span style="font-size: 12px;"><font face="Monaco, Courier New"><br>
  </font></span>
  <pre wrap="">
<hr size="4" width="90%">
_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a></pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2262.php">Marcus G. Daniels: "Re: [OMPI users] For Open MPI + BPROC users"</a>
<li><strong>Previous message:</strong> <a href="2260.php">Ralph H Castain: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>In reply to:</strong> <a href="2260.php">Ralph H Castain: "Re: [OMPI users] x11 forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2270.php">Galen Shipman: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2270.php">Galen Shipman: "Re: [OMPI users] x11 forwarding"</a>
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
