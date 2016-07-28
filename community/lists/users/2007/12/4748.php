<?
$subject_val = "Re: [OMPI users] unable to open osc pt2pt";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 21:21:32 2007" -->
<!-- isoreceived="20071220022132" -->
<!-- sent="Wed, 19 Dec 2007 21:21:25 -0500" -->
<!-- isosent="20071220022125" -->
<!-- name="de Almeida, Valmor F." -->
<!-- email="dealmeidav_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unable to open osc pt2pt" -->
<!-- id="D2D7D9FE2492524A925313E2D82E1B53074573C5_at_ORNLEXCHANGE.ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6ce0ac130712170746l25686b7dj12135ae7eea3de72_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] unable to open osc pt2pt<br>
<strong>From:</strong> de Almeida, Valmor F. (<em>dealmeidav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-19 21:21:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4749.php">Ralph H Castain: "Re: [OMPI users] mpirun: specify multiple install prefixes"</a>
<li><strong>Previous message:</strong> <a href="4747.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>In reply to:</strong> <a href="4687.php">Brian Granger: "Re: [OMPI users] unable to open osc pt2pt"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know how to access the svn repository.
<br>
<p>svn checkout <a href="http://mpi4py.scipy.org/mpi4py/browser/mpi4py/trunk">http://mpi4py.scipy.org/mpi4py/browser/mpi4py/trunk</a> mpi4py
<br>
svn: PROPFIND request failed on '/mpi4py/browser/mpi4py/trunk'
<br>
svn: PROPFIND of '/mpi4py/browser/mpi4py/trunk': 200 Ok
<br>
(<a href="http://mpi4py.scipy.org">http://mpi4py.scipy.org</a>)
<br>
<p>Also signed up for the mpi4py users list; took many days to get a reply
<br>
and when I confirmed the subscription e-mail, it bounced back; maybe a
<br>
temporary problem?...
<br>
<p>Thanks for any help.
<br>
<p><pre>
--
Valmor
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
On
&gt; Behalf Of Brian Granger
&gt; Sent: Monday, December 17, 2007 10:47 AM
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] unable to open osc pt2pt
&gt; 
&gt; This should be fixed in the subversion trunk of mpi4py.  Can you do an
&gt; update to that version and retry.  If it still doesn't work, post to
&gt; the mpi4py list and we will see what we can do.
&gt; 
&gt; Brian
&gt; 
&gt; On Dec 17, 2007 8:25 AM, de Almeida, Valmor F. &lt;dealmeidav_at_[hidden]&gt;
&gt; wrote:
&gt; &gt;
&gt; &gt; Hello,
&gt; &gt;
&gt; &gt; I am getting these messages (below) when running mpi4py python
codes.
&gt; &gt; Always one message per mpi process. The codes seem to run correctly.
Any
&gt; &gt; ideas why this is happening and how to avoid it?
&gt; &gt;
&gt; &gt; Thanks,
&gt; &gt;
&gt; &gt; --
&gt; &gt; Valmor de Almeida
&gt; &gt;
&gt; &gt; &gt;mpirun -np 2 python helloworld.py
&gt; &gt; [xeon0:05998] mca: base: component_find: unable to open osc pt2pt:
file
&gt; &gt; not found (ignored)
&gt; &gt; [xeon0:05999] mca: base: component_find: unable to open osc pt2pt:
file
&gt; &gt; not found (ignored)
&gt; &gt; Hello, World!! I am process 0 of 2 on xeon0.
&gt; &gt; Hello, World!! I am process 1 of 2 on xeon0.
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4749.php">Ralph H Castain: "Re: [OMPI users] mpirun: specify multiple install prefixes"</a>
<li><strong>Previous message:</strong> <a href="4747.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>In reply to:</strong> <a href="4687.php">Brian Granger: "Re: [OMPI users] unable to open osc pt2pt"</a>
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
