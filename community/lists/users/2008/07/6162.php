<?
$subject_val = "Re: [OMPI users] how to make a process start and then join a MPI group";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 15:42:17 2008" -->
<!-- isoreceived="20080728194217" -->
<!-- sent="Mon, 28 Jul 2008 15:42:13 -0400" -->
<!-- isosent="20080728194213" -->
<!-- name="Mark Borgerding" -->
<!-- email="markb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to make a process start and then join a MPI group" -->
<!-- id="488E2115.3040503_at_3db-labs.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7E23B772-102B-45FD-82FA-5E29C0DA334F_at_cisco.com" -->
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
<strong>Date:</strong> 2008-07-28 15:42:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6163.php">Jeff Squyres: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>Previous message:</strong> <a href="6161.php">Jeff Squyres: "Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
<li><strong>In reply to:</strong> <a href="6160.php">Jeff Squyres: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6165.php">Jeff Squyres: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Reply:</strong> <a href="6165.php">Jeff Squyres: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I should've been clearer.  I have observed the same behavior under both 
<br>
those versions.
<br>
I was not using the two version in the same cluster.
<br>
<p>-- Mark
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Are you mixing both v1.2.4 and v1.2.5 in a single MPI job?  That may 
</span><br>
<span class="quotelev1">&gt; have unintended side-effects -- we unfortunately do not guarantee 
</span><br>
<span class="quotelev1">&gt; binary compatibility between any of our releases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 28, 2008, at 10:16 AM, Mark Borgerding wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using version 1.2.4 (Fedora 9) and 1.2.5 ( CentOS 5.2 )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A little clarification:
</span><br>
<span class="quotelev2">&gt;&gt; The children do not actually wake up when the parent *sends* data to 
</span><br>
<span class="quotelev2">&gt;&gt; them, but only after the parent tries to receive data from the merged 
</span><br>
<span class="quotelev2">&gt;&gt; intercomm.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the timeline:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; parent call to MPI_Comm_spawn returns
</span><br>
<span class="quotelev2">&gt;&gt; parent calls MPI_Intercomm_merge
</span><br>
<span class="quotelev2">&gt;&gt; children call to MPI_Init return
</span><br>
<span class="quotelev2">&gt;&gt; children call MPI_Intercomm_merge
</span><br>
<span class="quotelev2">&gt;&gt; parent MPI_Intercomm_merge returns
</span><br>
<span class="quotelev2">&gt;&gt;   (long pause inserted via parent sleep)
</span><br>
<span class="quotelev2">&gt;&gt; parent sends data to kid 1
</span><br>
<span class="quotelev2">&gt;&gt;   (long pause inserted via parent sleep)
</span><br>
<span class="quotelev2">&gt;&gt; parent starts to receive data from kid 1
</span><br>
<span class="quotelev2">&gt;&gt; all children's calls to MPI_Intercomm_merge return
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Mark
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aur&#233;lien Bouteiller wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok, I'll check to see what happens. Which version of Open MPI are 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you using ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aurelien
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 27 juil. 08 &#224; 23:13, Mark Borgerding a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I got something working, but I'm not 100% sure why.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The children woke up and returned from their calls to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Intercomm_merge only after
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the parent used the intercomm to send some data to the children via 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Send.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mark Borgerding wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Perhaps I am doing something wrong. The childrens' calls to 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Intercomm_merge never return.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here's the chronology (with 2 children):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent calls MPI_Init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent calls MPI_Comm_spawn
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; child calls MPI_Init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; child calls MPI_Init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent call to MPI_Comm_spawn returns
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (long pause inserted)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent calls MPI_Intercomm_merge
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; child MPI_Init returns
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; child calls MPI_Intercomm_merge
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; child MPI_Init returns
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; child calls MPI_Intercomm_merge
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent MPI_Intercomm_merge returns
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ... but the child processes never return from the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_InterComm_merge function.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here are some code snippets:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ############# parent:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  MPI_Init(NULL,NULL);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  int nkids=2;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  int errs[nkids];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  MPI_Comm kid;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  cerr &lt;&lt; &quot;parent calls MPI_Comm_spawn&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  CHECK_MPI_CODE(  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Comm_spawn(&quot;test_mpi&quot;,NULL,nkids,MPI_INFO_NULL,0,MPI_COMM_WORLD,&amp;kid,errs) 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; );
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  cerr &lt;&lt; &quot;parent call to MPI_Comm_spawn returns&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  for (k=0;k&lt;nkids;++k)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      CHECK_MPI_CODE( errs[k] );
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  MPI_Comm allmpi;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  cerr &lt;&lt; &quot;(long pause)&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  sleep(3);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  cerr &lt;&lt; &quot;parent calls MPI_Intercomm_merge\n&quot;;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  CHECK_MPI_CODE( MPI_Intercomm_merge( kid, 0, &amp;allmpi) );
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  cerr &lt;&lt; &quot;parent MPI_Intercomm_merge returns\n&quot;;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ############### child:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  fprintf(stderr,&quot;child calls MPI_Init \n&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  CHECK_MPI_CODE( MPI_Init(NULL,NULL) );
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  fprintf(stderr,&quot;child MPI_Init returns\n&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  MPI_Comm parent;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  CHECK_MPI_CODE( MPI_Comm_get_parent(&amp;parent) );
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  fprintf(stderr,&quot;child calls MPI_Intercomm_merge \n&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  MPI_Comm allmpi;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  CHECK_MPI_CODE( MPI_Intercomm_merge( parent, 1, &amp;allmpi) );
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  fprintf(stderr,&quot;child call to MPI_Intercomm_merge returns\n&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (the above line never gets executed)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Aur&#233;lien Bouteiller wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Intercomm_merge is what you are looking for.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Aurelien
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Le 26 juil. 08 &#224; 13:23, Mark Borgerding a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Okay, so I've gotten a little bit closer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm using MPI_Comm_spawn to start several children processes.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The problem is that the children are in their own group, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; separate from the parent (just the like the documentation 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; says).  I want to merge the children's group with the parent 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; group so I can efficiently Send/Recv data between them..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is this possible?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Plan B: I guess if there is no elegant way to merge all those 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; processes into one group, I can connect sockets and make 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; intercomms to talk from the parent directly to each child.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Mark
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mark Borgerding wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am writing a code module that plugs into a larger application 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; framework.  That framework loads my code module as a shared 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; object.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; So I do not control how the first process gets started, but I 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; still want it to be able to start and participate in an MPI group.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here's roughly what I want to happen ( I think):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; framework app running (not under my control)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     -&gt; framework loads mycode.so shared object into its process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;            -&gt; mycode.so starts mpi programs on several hosts 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (e.g. via system call to mpiexec )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;            -&gt; initial mycode.so process participates in the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; group he just started (e.g. he shows up in MPI_Comm_group, can 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; use MPI_Send, MPI_Recv, etc. )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Can this be done?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am running under Centos 5.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mark
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Sr. Research Associate at Innovative Computing Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * University of Tennessee
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * 1122 Volunteer Boulevard, suite 350
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * 865 974 6321
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Mark Borgerding
</span><br>
<span class="quotelev2">&gt;&gt; 3dB Labs, Inc
</span><br>
<span class="quotelev2">&gt;&gt; Innovate.  Develop.  Deliver.
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
<p><p><pre>
-- 
Mark Borgerding
3dB Labs, Inc
Innovate.  Develop.  Deliver.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6163.php">Jeff Squyres: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>Previous message:</strong> <a href="6161.php">Jeff Squyres: "Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
<li><strong>In reply to:</strong> <a href="6160.php">Jeff Squyres: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6165.php">Jeff Squyres: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Reply:</strong> <a href="6165.php">Jeff Squyres: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
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
