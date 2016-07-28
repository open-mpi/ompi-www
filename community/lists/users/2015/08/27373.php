<?
$subject_val = "Re: [OMPI users] having an issue with paralleling jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  2 07:37:19 2015" -->
<!-- isoreceived="20150802113719" -->
<!-- sent="Sun, 2 Aug 2015 17:07:16 +0530" -->
<!-- isosent="20150802113716" -->
<!-- name="abhisek Mondal" -->
<!-- email="abhisek.mndl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] having an issue with paralleling jobs" -->
<!-- id="CA+DemH-=TmsVo77SzHbrZBwWnX4WBkt2989GC+kCfMbigMdkCA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+DemH_zECmYJhVWg5WKMCnOoz7G_VwGEejmEumybk=OnAZU6g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-08-02 07:37:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Previous message:</strong> <a href="27372.php">abhisek Mondal: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>In reply to:</strong> <a href="27372.php">abhisek Mondal: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27375.php">Gilles Gouaillardet: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Reply:</strong> <a href="27375.php">Gilles Gouaillardet: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm on a HPC cluster. So, the openmpi-1.6.4 here installed as a module.
<br>
In .pbs script, before executing my code-line, I'm loading both &quot;nwchem&quot;
<br>
and &quot;openmpi&quot; module.
<br>
It is working very nicely when I work on single node(with 16 processors).
<br>
But if I try to switch in multiple nodes with &quot;hostfile&quot; option, things are
<br>
&nbsp;starting to crash.
<br>
<p>On Sun, Aug 2, 2015 at 5:02 PM, abhisek Mondal &lt;abhisek.mndl_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; HI,
</span><br>
<span class="quotelev1">&gt; I have tried using full paths for both of them. But stuck in the same
</span><br>
<span class="quotelev1">&gt; issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Aug 2, 2015 at 4:39 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is ompi installed on the other node and at the same location ?
</span><br>
<span class="quotelev2">&gt;&gt; did you configure ompi with --enable-mpirun-prefix-by-default ?
</span><br>
<span class="quotelev2">&gt;&gt; (note that should not be necessary if you invoke mpirun with full path )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you can also try
</span><br>
<span class="quotelev2">&gt;&gt; /.../bin/mpirun --mca plm_base_verbose 100 ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and see if there is something wrong
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; last but not least, can you try to use full path for both mpirun and
</span><br>
<span class="quotelev2">&gt;&gt; nwchem ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sunday, August 2, 2015, abhisek Mondal &lt;abhisek.mndl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, I have tried this and got following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *mpirun was unable to launch the specified application as it could not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; find an executable:*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Executable: nwchem*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Node: cx934*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *while attempting to start process rank 16.*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Given that: I have to run my code with &quot;nwchem filename.nw&quot; command.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While I run the same thing on 1 node with 16 processor, it works fine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (mpirun -np 16 nwchem filename.nw).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can't understand why am I having problem while trying to go for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multinode operation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sun, Aug 2, 2015 at 3:41 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you try running invoking mpirun with its full path instead ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; e.g. /usr/local/bin/mpirun instead of mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sunday, August 2, 2015, abhisek Mondal &lt;abhisek.mndl_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here is the other details,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a. The Openmpi version is 1.6.4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; b. The error as being generated is :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *Warning: Permanently added 'cx0937,10.1.4.1' (RSA) to the list of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; known hosts.*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *Warning: Permanently added 'cx0934,10.1.3.255' (RSA) to the list of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; known hosts.*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *orted: Command not found.*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *orted: Command not found.*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *--------------------------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *A daemon (pid 53580) died unexpectedly with status 1 while attempting*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *to launch so we are aborting.*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *There may be more information reported by the environment (see
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; above).*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; shared*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have the*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *location of the shared libraries on the remote nodes and this will*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *automatically be forwarded to the remote nodes.*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *--------------------------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *--------------------------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *mpirun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *that caused that situation.*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *--------------------------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm not being able to understand why &quot;command not found&quot; error is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; being raised.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sun, Aug 2, 2015 at 1:43 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Would you please tell us:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (a) what version of OMPI you are using
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (b) what error message you are getting when the job terminates
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Aug 1, 2015, at 12:22 PM, abhisek Mondal &lt;abhisek.mndl_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm working on an openmpi enabled cluster. I'm trying to run a job
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with 2 different nodes and 16 processors per nodes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Using this command:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *mpirun -np 32 --hostfile myhostfile -loadbalance exe*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The contents of myhostfile:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *cx0937 slots=16    *
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *cx0934 slots=16*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; But the job is getting terminated each time before job allocation
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; happens as per desired way.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So, it'll very nice if I get some suggestions regarding the facts I'm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; missing.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thank you
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Abhisek Mondal
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *Research Fellow*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *Structural Biology and Bioinformatics*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *Indian Institute of Chemical Biology*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *Kolkata 700032*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *INDIA*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Searchable archives:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27367.php">http://www.open-mpi.org/community/lists/users/2015/08/27367.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27367.php">http://www.open-mpi.org/community/lists/users/2015/08/27367.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Abhisek Mondal
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *Research Fellow*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *Structural Biology and Bioinformatics*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *Indian Institute of Chemical Biology*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *Kolkata 700032*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *INDIA*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27369.php">http://www.open-mpi.org/community/lists/users/2015/08/27369.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Abhisek Mondal
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Research Fellow*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Structural Biology and Bioinformatics*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Indian Institute of Chemical Biology*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Kolkata 700032*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *INDIA*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27371.php">http://www.open-mpi.org/community/lists/users/2015/08/27371.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27373/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Previous message:</strong> <a href="27372.php">abhisek Mondal: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>In reply to:</strong> <a href="27372.php">abhisek Mondal: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27375.php">Gilles Gouaillardet: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Reply:</strong> <a href="27375.php">Gilles Gouaillardet: "Re: [OMPI users] having an issue with paralleling jobs"</a>
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
