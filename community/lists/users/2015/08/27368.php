<?
$subject_val = "Re: [OMPI users] having an issue with paralleling jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  2 03:39:28 2015" -->
<!-- isoreceived="20150802073928" -->
<!-- sent="Sun, 2 Aug 2015 13:09:16 +0530" -->
<!-- isosent="20150802073916" -->
<!-- name="abhisek Mondal" -->
<!-- email="abhisek.mndl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] having an issue with paralleling jobs" -->
<!-- id="CA+DemH8D3kC6hSMCzD3i_rUZ6M61xqUZTECPOuERuAPBL8LJSA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="7DEE71C8-7349-4925-92FD-244F49328FB3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] having an issue with paralleling jobs<br>
<strong>From:</strong> abhisek Mondal (<em>abhisek.mndl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-02 03:39:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27369.php">Gilles Gouaillardet: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Previous message:</strong> <a href="27367.php">Ralph Castain: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>In reply to:</strong> <a href="27367.php">Ralph Castain: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27369.php">Gilles Gouaillardet: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Reply:</strong> <a href="27369.php">Gilles Gouaillardet: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is the other details,
<br>
<p>a. The Openmpi version is 1.6.4
<br>
<p>b. The error as being generated is :
<br>
*Warning: Permanently added 'cx0937,10.1.4.1' (RSA) to the list of known
<br>
hosts.*
<br>
*Warning: Permanently added 'cx0934,10.1.3.255' (RSA) to the list of known
<br>
hosts.*
<br>
*orted: Command not found.*
<br>
*orted: Command not found.*
<br>
*--------------------------------------------------------------------------*
<br>
*A daemon (pid 53580) died unexpectedly with status 1 while attempting*
<br>
*to launch so we are aborting.*
<br>
<p>*There may be more information reported by the environment (see above).*
<br>
<p>*This may be because the daemon was unable to find all the needed shared*
<br>
*libraries on the remote node. You may set your LD_LIBRARY_PATH to have the*
<br>
*location of the shared libraries on the remote nodes and this will*
<br>
*automatically be forwarded to the remote nodes.*
<br>
*--------------------------------------------------------------------------*
<br>
*--------------------------------------------------------------------------*
<br>
*mpirun noticed that the job aborted, but has no info as to the process*
<br>
*that caused that situation.*
<br>
*--------------------------------------------------------------------------*
<br>
<p><p>I'm not being able to understand why &quot;command not found&quot; error is being
<br>
raised.
<br>
Thank you.
<br>
<p>On Sun, Aug 2, 2015 at 1:43 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Would you please tell us:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (a) what version of OMPI you are using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (b) what error message you are getting when the job terminates
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 1, 2015, at 12:22 PM, abhisek Mondal &lt;abhisek.mndl_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm working on an openmpi enabled cluster. I'm trying to run a job with 2
</span><br>
<span class="quotelev1">&gt; different nodes and 16 processors per nodes.
</span><br>
<span class="quotelev1">&gt; Using this command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *mpirun -np 32 --hostfile myhostfile -loadbalance exe*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The contents of myhostfile:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *cx0937 slots=16    *
</span><br>
<span class="quotelev1">&gt; *cx0934 slots=16*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But the job is getting terminated each time before job allocation happens
</span><br>
<span class="quotelev1">&gt; as per desired way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, it'll very nice if I get some suggestions regarding the facts I'm
</span><br>
<span class="quotelev1">&gt; missing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Abhisek Mondal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Research Fellow*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Structural Biology and Bioinformatics*
</span><br>
<span class="quotelev1">&gt; *Indian Institute of Chemical Biology*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Kolkata 700032*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *INDIA*
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Searchable archives:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27367.php">http://www.open-mpi.org/community/lists/users/2015/08/27367.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27367.php">http://www.open-mpi.org/community/lists/users/2015/08/27367.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Abhisek Mondal
*Research Fellow*
*Structural Biology and Bioinformatics*
*Indian Institute of Chemical Biology*
*Kolkata 700032*
*INDIA*
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27368/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27369.php">Gilles Gouaillardet: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Previous message:</strong> <a href="27367.php">Ralph Castain: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>In reply to:</strong> <a href="27367.php">Ralph Castain: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27369.php">Gilles Gouaillardet: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Reply:</strong> <a href="27369.php">Gilles Gouaillardet: "Re: [OMPI users] having an issue with paralleling jobs"</a>
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
