<?
$subject_val = "Re: [OMPI users] having an issue with paralleling jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  2 07:32:29 2015" -->
<!-- isoreceived="20150802113229" -->
<!-- sent="Sun, 2 Aug 2015 17:02:17 +0530" -->
<!-- isosent="20150802113217" -->
<!-- name="abhisek Mondal" -->
<!-- email="abhisek.mndl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] having an issue with paralleling jobs" -->
<!-- id="CA+DemH_zECmYJhVWg5WKMCnOoz7G_VwGEejmEumybk=OnAZU6g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5sRVW447kh51mKd_-sOP1-L=fi9p=_YE_MdVNkmM7s2CQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-08-02 07:32:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27373.php">abhisek Mondal: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Previous message:</strong> <a href="27371.php">Gilles Gouaillardet: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>In reply to:</strong> <a href="27371.php">Gilles Gouaillardet: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27373.php">abhisek Mondal: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Reply:</strong> <a href="27373.php">abhisek Mondal: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Reply:</strong> <a href="27374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] having an issue with paralleling jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI,
<br>
I have tried using full paths for both of them. But stuck in the same issue.
<br>
<p>On Sun, Aug 2, 2015 at 4:39 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Is ompi installed on the other node and at the same location ?
</span><br>
<span class="quotelev1">&gt; did you configure ompi with --enable-mpirun-prefix-by-default ?
</span><br>
<span class="quotelev1">&gt; (note that should not be necessary if you invoke mpirun with full path )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you can also try
</span><br>
<span class="quotelev1">&gt; /.../bin/mpirun --mca plm_base_verbose 100 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and see if there is something wrong
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; last but not least, can you try to use full path for both mpirun and
</span><br>
<span class="quotelev1">&gt; nwchem ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sunday, August 2, 2015, abhisek Mondal &lt;abhisek.mndl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I have tried this and got following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *mpirun was unable to launch the specified application as it could not
</span><br>
<span class="quotelev2">&gt;&gt; find an executable:*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Executable: nwchem*
</span><br>
<span class="quotelev2">&gt;&gt; *Node: cx934*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *while attempting to start process rank 16.*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Given that: I have to run my code with &quot;nwchem filename.nw&quot; command.
</span><br>
<span class="quotelev2">&gt;&gt; While I run the same thing on 1 node with 16 processor, it works fine
</span><br>
<span class="quotelev2">&gt;&gt; (mpirun -np 16 nwchem filename.nw).
</span><br>
<span class="quotelev2">&gt;&gt; Can't understand why am I having problem while trying to go for multinode
</span><br>
<span class="quotelev2">&gt;&gt; operation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Aug 2, 2015 at 3:41 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you try running invoking mpirun with its full path instead ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e.g. /usr/local/bin/mpirun instead of mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sunday, August 2, 2015, abhisek Mondal &lt;abhisek.mndl_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is the other details,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a. The Openmpi version is 1.6.4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; b. The error as being generated is :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *Warning: Permanently added 'cx0937,10.1.4.1' (RSA) to the list of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; known hosts.*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *Warning: Permanently added 'cx0934,10.1.3.255' (RSA) to the list of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; known hosts.*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *orted: Command not found.*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *orted: Command not found.*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *--------------------------------------------------------------------------*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *A daemon (pid 53580) died unexpectedly with status 1 while attempting*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *to launch so we are aborting.*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *There may be more information reported by the environment (see above).*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shared*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *libraries on the remote node. You may set your LD_LIBRARY_PATH to have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *location of the shared libraries on the remote nodes and this will*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *automatically be forwarded to the remote nodes.*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *--------------------------------------------------------------------------*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *--------------------------------------------------------------------------*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *mpirun noticed that the job aborted, but has no info as to the process*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *that caused that situation.*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *--------------------------------------------------------------------------*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm not being able to understand why &quot;command not found&quot; error is being
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; raised.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sun, Aug 2, 2015 at 1:43 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Would you please tell us:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (a) what version of OMPI you are using
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (b) what error message you are getting when the job terminates
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Aug 1, 2015, at 12:22 PM, abhisek Mondal &lt;abhisek.mndl_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm working on an openmpi enabled cluster. I'm trying to run a job
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with 2 different nodes and 16 processors per nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Using this command:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *mpirun -np 32 --hostfile myhostfile -loadbalance exe*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The contents of myhostfile:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *cx0937 slots=16    *
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *cx0934 slots=16*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But the job is getting terminated each time before job allocation
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; happens as per desired way.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So, it'll very nice if I get some suggestions regarding the facts I'm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; missing.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Searchable archives:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27367.php">http://www.open-mpi.org/community/lists/users/2015/08/27367.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27367.php">http://www.open-mpi.org/community/lists/users/2015/08/27367.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Abhisek Mondal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *Research Fellow*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *Structural Biology and Bioinformatics*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *Indian Institute of Chemical Biology*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *Kolkata 700032*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *INDIA*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27369.php">http://www.open-mpi.org/community/lists/users/2015/08/27369.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Abhisek Mondal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Research Fellow*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Structural Biology and Bioinformatics*
</span><br>
<span class="quotelev2">&gt;&gt; *Indian Institute of Chemical Biology*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Kolkata 700032*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *INDIA*
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27371.php">http://www.open-mpi.org/community/lists/users/2015/08/27371.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27372/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27373.php">abhisek Mondal: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Previous message:</strong> <a href="27371.php">Gilles Gouaillardet: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>In reply to:</strong> <a href="27371.php">Gilles Gouaillardet: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27373.php">abhisek Mondal: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Reply:</strong> <a href="27373.php">abhisek Mondal: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Reply:</strong> <a href="27374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] having an issue with paralleling jobs"</a>
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
