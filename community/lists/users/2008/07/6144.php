<?
$subject_val = "Re: [OMPI users] how to make a process start and then join a MPI group";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 27 22:35:29 2008" -->
<!-- isoreceived="20080728023529" -->
<!-- sent="Sun, 27 Jul 2008 22:33:44 -0400" -->
<!-- isosent="20080728023344" -->
<!-- name="Mark Borgerding" -->
<!-- email="markb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to make a process start and then join a MPI group" -->
<!-- id="488D3008.50106_at_3dB-Labs.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E4A408FC-F269-42FD-97FD-25161D28CC74_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to make a process start and then join a MPI group<br>
<strong>From:</strong> Mark Borgerding (<em>markb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-27 22:33:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6145.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Previous message:</strong> <a href="6143.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Want to build a static openmpi with both myrinet and tcp"</a>
<li><strong>In reply to:</strong> <a href="6134.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6145.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Reply:</strong> <a href="6145.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perhaps I am doing something wrong. The childrens' calls to 
<br>
MPI_Intercomm_merge never return.
<br>
<p>Here's the chronology (with 2 children):
<br>
<p>parent calls MPI_Init
<br>
parent calls MPI_Comm_spawn
<br>
child calls MPI_Init
<br>
child calls MPI_Init
<br>
parent call to MPI_Comm_spawn returns
<br>
(long pause inserted)
<br>
parent calls MPI_Intercomm_merge
<br>
child MPI_Init returns
<br>
child calls MPI_Intercomm_merge
<br>
child MPI_Init returns
<br>
child calls MPI_Intercomm_merge
<br>
parent MPI_Intercomm_merge returns
<br>
... but the child processes never return from the MPI_InterComm_merge 
<br>
function.
<br>
<p><p>Here are some code snippets:
<br>
<p>############# parent:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(NULL,NULL);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int nkids=2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int errs[nkids];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm kid;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cerr &lt;&lt; &quot;parent calls MPI_Comm_spawn&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CHECK_MPI_CODE(  
<br>
MPI_Comm_spawn(&quot;test_mpi&quot;,NULL,nkids,MPI_INFO_NULL,0,MPI_COMM_WORLD,&amp;kid,errs) 
<br>
);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cerr &lt;&lt; &quot;parent call to MPI_Comm_spawn returns&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (k=0;k&lt;nkids;++k)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHECK_MPI_CODE( errs[k] );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm allmpi;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cerr &lt;&lt; &quot;(long pause)&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(3);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cerr &lt;&lt; &quot;parent calls MPI_Intercomm_merge\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CHECK_MPI_CODE( MPI_Intercomm_merge( kid, 0, &amp;allmpi) );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cerr &lt;&lt; &quot;parent MPI_Intercomm_merge returns\n&quot;;
<br>
<p>############### child:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;child calls MPI_Init \n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CHECK_MPI_CODE( MPI_Init(NULL,NULL) );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;child MPI_Init returns\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm parent;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CHECK_MPI_CODE( MPI_Comm_get_parent(&amp;parent) );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;child calls MPI_Intercomm_merge \n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm allmpi;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CHECK_MPI_CODE( MPI_Intercomm_merge( parent, 1, &amp;allmpi) );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;child call to MPI_Intercomm_merge returns\n&quot;);
<br>
(the above line never gets executed)
<br>
<p><p><p>Aur&#233;lien Bouteiller wrote:
<br>
<span class="quotelev1">&gt; MPI_Intercomm_merge is what you are looking for.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt; Le 26 juil. 08 &#224; 13:23, Mark Borgerding a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Okay, so I've gotten a little bit closer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using MPI_Comm_spawn to start several children processes.  The 
</span><br>
<span class="quotelev2">&gt;&gt; problem is that the children are in their own group, separate from 
</span><br>
<span class="quotelev2">&gt;&gt; the parent (just the like the documentation says).  I want to merge 
</span><br>
<span class="quotelev2">&gt;&gt; the children's group with the parent group so I can efficiently 
</span><br>
<span class="quotelev2">&gt;&gt; Send/Recv data between them..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this possible?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Plan B: I guess if there is no elegant way to merge all those 
</span><br>
<span class="quotelev2">&gt;&gt; processes into one group, I can connect sockets and make intercomms 
</span><br>
<span class="quotelev2">&gt;&gt; to talk from the parent directly to each child.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Mark
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mark Borgerding wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am writing a code module that plugs into a larger application 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; framework.  That framework loads my code module as a shared object.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I do not control how the first process gets started, but I still 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; want it to be able to start and participate in an MPI group.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's roughly what I want to happen ( I think):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; framework app running (not under my control)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -&gt; framework loads mycode.so shared object into its process
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              -&gt; mycode.so starts mpi programs on several hosts (e.g. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; via system call to mpiexec )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              -&gt; initial mycode.so process participates in the group 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; he just started (e.g. he shows up in MPI_Comm_group, can use 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send, MPI_Recv, etc. )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can this be done?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am running under Centos 5.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Mark
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6145.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Previous message:</strong> <a href="6143.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Want to build a static openmpi with both myrinet and tcp"</a>
<li><strong>In reply to:</strong> <a href="6134.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6145.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Reply:</strong> <a href="6145.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
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
