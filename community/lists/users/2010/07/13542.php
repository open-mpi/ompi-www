<?
$subject_val = "Re: [OMPI users] configure options";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  8 10:44:15 2010" -->
<!-- isoreceived="20100708144415" -->
<!-- sent="Thu, 8 Jul 2010 10:44:01 -0400" -->
<!-- isosent="20100708144401" -->
<!-- name="Zhigang Wei" -->
<!-- email="daniel.wei_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure options" -->
<!-- id="201007081044010003930_at_nd.edu" -->
<!-- charset="gb2312" -->
<!-- inreplyto="201007072013127655858_at_nd.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] configure options<br>
<strong>From:</strong> Zhigang Wei (<em>daniel.wei_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-08 10:44:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13543.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<li><strong>Previous message:</strong> <a href="13541.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>In reply to:</strong> <a href="13524.php">Zhigang Wei: "[OMPI users] configure options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13543.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<li><strong>Reply:</strong> <a href="13543.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, thanks, the LD_LIBRARY_PATH has been set, and I checked again, and I don't think there is a confict.
<br>

<br>
May I ask you a question, how do you normally configure your openmpi?
<br>

<br>
I guess you will not use simply &quot;./configure --prefix=blahblah&quot;, pls correct me if I am wrong.
<br>

<br>
So, what is your procedure to check your system hardware and software background, so as to make openmpi correctly built.
<br>

<br>
That's my question.
<br>

<br>
And Thank you, Gus
<br>

<br>

<br>

<br>
Zhigang Wei
<br>
------------
<br>
NatHaz Modeling Laboratory
<br>
University of Notre Dame
<br>
112J FitzPatrick Hall
<br>
Notre Dame, IN 46556 
<br>

<br>

<br>

<br>
2010-07-08
<br>

<br>

<br>

<br>
&#183;&#162;&#188;&#254;&#200;&#203;&#163;&#186; Gus Correa 
<br>
&#183;&#162;&#203;&#205;&#202;&#177;&#188;&#228;&#163;&#186; 2010-07-08  10:07:13 
<br>
&#202;&#213;&#188;&#254;&#200;&#203;&#163;&#186; Open MPI Users 
<br>
&#179;&#173;&#203;&#205;&#163;&#186; 
<br>
&#214;&#247;&#204;&#226;&#163;&#186; Re: [OMPI users] configure options 
<br>
&nbsp;
<br>
Hi Zhigang
<br>
Are  you talking about a run time failure?
<br>
If you are, I think what is missing is just to set the PATH and the 
<br>
LD_LIBRARY_PATH environment variables to point to the OpenMPI directories.
<br>
This can be done in your .[t]cshrc / .profile / .bashrc
<br>
file in your home directory (assuming it is accessible by all computers
<br>
that you're using to run the program).
<br>
Hopefully it will override the default OpenMPI 1.3.2 in your HPC.
<br>
See this FAQ:
<br>
<a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
There are other ways to do it, which you can find with
<br>
&quot;man $MY_OWN_DIR/share/man/man1/mpiexec&quot;.
<br>
(You could also set MANPATH to get the right man pages.)
<br>
I hope this helps,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
Zhigang Wei wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; How can I decide the configure options? I am greatly confused.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am using school's high performance computer.
</span><br>
<span class="quotelev1">&gt; But the openmpi there is version 1.3.2, old, so I want to build the new one.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am new to openmpi, I have built the openmpi and it doesn't work, I 
</span><br>
<span class="quotelev1">&gt; built and installed it to my own directory.
</span><br>
<span class="quotelev1">&gt; I use the following configure options,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ./configure --with-sge --prefix=$MY_OWN_DIR --with-psm
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; but it won't work and failed with somelines like
</span><br>
<span class="quotelev1">&gt; ......lib/openmpi/mca_ess_hnp: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; in the output file.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I guess my configure is wrong, could you tell me the meaning of 
</span><br>
<span class="quotelev1">&gt; --with-psm, --with-sge, do I need to add other options? I guess the 
</span><br>
<span class="quotelev1">&gt; computing nodes are using infiniband, but how to build with that? If I 
</span><br>
<span class="quotelev1">&gt; don't have the su right, can I build it? What should I pay attettion if 
</span><br>
<span class="quotelev1">&gt; I want to build and use my own openmpi?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; You see, in a personal multicore computer, building is so easy and 
</span><br>
<span class="quotelev1">&gt; mpirun the program without any problems. But in school's hpc, it fails 
</span><br>
<span class="quotelev1">&gt; all the time.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Please help. Thank you all.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Zhigang Wei
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; NatHaz Modeling Laboratory
</span><br>
<span class="quotelev1">&gt; University of Notre Dame
</span><br>
<span class="quotelev1">&gt; 112J FitzPatrick Hall
</span><br>
<span class="quotelev1">&gt; Notre Dame, IN 46556 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2010-07-07
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
.
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13542/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13543.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<li><strong>Previous message:</strong> <a href="13541.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>In reply to:</strong> <a href="13524.php">Zhigang Wei: "[OMPI users] configure options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13543.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<li><strong>Reply:</strong> <a href="13543.php">Gus Correa: "Re: [OMPI users] configure options"</a>
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
