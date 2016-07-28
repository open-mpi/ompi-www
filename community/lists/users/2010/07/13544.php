<?
$subject_val = "Re: [OMPI users] configure options";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  8 11:26:02 2010" -->
<!-- isoreceived="20100708152602" -->
<!-- sent="Thu, 8 Jul 2010 11:25:56 -0400" -->
<!-- isosent="20100708152556" -->
<!-- name="Zhigang Wei" -->
<!-- email="daniel.wei_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure options" -->
<!-- id="201007081125561166896_at_nd.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4C35EB97.90505_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2010-07-08 11:25:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13545.php">Anton Shterenlikht: "[OMPI users] ipath_userinit: userinit command failed: Cannot allocate memory"</a>
<li><strong>Previous message:</strong> <a href="13543.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<li><strong>In reply to:</strong> <a href="13543.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13546.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<li><strong>Reply:</strong> <a href="13546.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Gus, your answer is very helpful.
<br>

<br>
I use a CFD opensource called OpenFOAM, from official build suggestions, I found something like &quot;--with-sge&quot;, 
<br>
but I just don't know if it make sense in my school 's hpc setting.
<br>

<br>
The basic question is, if simply &quot;./configure --prefix=blahblah&quot; works (as you have said the modern openmpi will AUTOMATICALLY detect the hard and software system configuaration), then, why should people around try to build it with &quot;--with-sge&quot;, etc. That make those dummies like me really confused.
<br>

<br>
Thanks and best Regards,
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
&#229;&#143;&#145;&#228;&#187;&#182;&#228;&#186;&#186;&#239;&#188;&#154; Gus Correa 
<br>
&#229;&#143;&#145;&#233;&#128;&#129;&#230;&#151;&#182;&#233;&#151;&#180;&#239;&#188;&#154; 2010-07-08  11:17:26 
<br>
&#230;&#148;&#182;&#228;&#187;&#182;&#228;&#186;&#186;&#239;&#188;&#154; Open MPI Users 
<br>
&#230;&#138;&#132;&#233;&#128;&#129;&#239;&#188;&#154; 
<br>
&#228;&#184;&#187;&#233;&#162;&#152;&#239;&#188;&#154; Re: [OMPI users] configure options 
<br>
&nbsp;
<br>
Hi Zhigang
<br>
So, did setting the LD_LIBRARY_PATH work?
<br>
**
<br>
I don't add many options to the OpenMPI configure,
<br>
besides --prefix.
<br>
OpenMPI does a very good job searching and checking
<br>
for everything that is available and that it needs in the system.
<br>
It will build with support for nearly everything it finds
<br>
and that works.
<br>
Since you are using OpenMPI in your university HPC computer,
<br>
you may want to piggy back support from its resource manager/queue
<br>
system (e.g. Torque/PBS, --with-tm, or SGE, or SLURM).
<br>
This makes mpiexec work in cooperation with the resource manager (RM),
<br>
automatically using the nodes that were allocated by the the RM
<br>
to your job.
<br>
That is not essential, but it helps.
<br>
The same is true if there is specific hardware
<br>
(e.g. Infinband --with-openib, NUMA, --with-libnuma, etc).
<br>
You may need to point configure to the directories where these libraries
<br>
are, if they are not in standard locations, it depends on your system.
<br>
Do ./configure --help for a list of options.
<br>
Also, consult the OpenMPI FAQ, which is the best resource to answer
<br>
many of your questions:
<br>
<a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
<br>
One way to check what configuration options OpenMPI is really using,
<br>
is to redirect the configure output to a file, and inspect it to see if
<br>
everything you want is there.
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
<span class="quotelev1">&gt; Hi, thanks, the LD_LIBRARY_PATH has been set, and I checked again, and I 
</span><br>
<span class="quotelev1">&gt; don't think there is a confict.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; May I ask you a question, how do you normally configure your openmpi?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I guess you will not use simply &quot;./configure --prefix=blahblah&quot;, pls 
</span><br>
<span class="quotelev1">&gt; correct me if I am wrong.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; So, what is your procedure to check your system hardware and software 
</span><br>
<span class="quotelev1">&gt; background, so as to make openmpi correctly built.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; That's my question.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; And Thank you, Gus
</span><br>
<span class="quotelev1">&gt;  
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
<span class="quotelev1">&gt; 2010-07-08
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *&#229;&#143;&#145;&#228;&#187;&#182;&#228;&#186;&#186;&#239;&#188;&#154;* Gus Correa
</span><br>
<span class="quotelev1">&gt; *&#229;&#143;&#145;&#233;&#128;&#129;&#230;&#151;&#182;&#233;&#151;&#180;&#239;&#188;&#154;* 2010-07-08  10:07:13
</span><br>
<span class="quotelev1">&gt; *&#230;&#148;&#182;&#228;&#187;&#182;&#228;&#186;&#186;&#239;&#188;&#154;* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *&#230;&#138;&#132;&#233;&#128;&#129;&#239;&#188;&#154;*
</span><br>
<span class="quotelev1">&gt; *&#228;&#184;&#187;&#233;&#162;&#152;&#239;&#188;&#154;* Re: [OMPI users] configure options
</span><br>
<span class="quotelev1">&gt; Hi Zhigang
</span><br>
<span class="quotelev1">&gt; Are  you talking about a run time failure?
</span><br>
<span class="quotelev1">&gt; If you are, I think what is missing is just to set the PATH and the 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH environment variables to point to the OpenMPI directories.
</span><br>
<span class="quotelev1">&gt; This can be done in your .[t]cshrc / .profile / .bashrc
</span><br>
<span class="quotelev1">&gt; file in your home directory (assuming it is accessible by all computers
</span><br>
<span class="quotelev1">&gt; that you're using to run the program).
</span><br>
<span class="quotelev1">&gt; Hopefully it will override the default OpenMPI 1.3.2 in your HPC.
</span><br>
<span class="quotelev1">&gt; See this FAQ:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev1">&gt; There are other ways to do it, which you can find with
</span><br>
<span class="quotelev1">&gt; &quot;man $MY_OWN_DIR/share/man/man1/mpiexec&quot;.
</span><br>
<span class="quotelev1">&gt; (You could also set MANPATH to get the right man pages.)
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Zhigang Wei wrote:
</span><br>
<span class="quotelev2">&gt;  &gt; Dear all,
</span><br>
<span class="quotelev2">&gt;  &gt;  
</span><br>
<span class="quotelev2">&gt;  &gt; How can I decide the configure options? I am greatly confused.
</span><br>
<span class="quotelev2">&gt;  &gt;  
</span><br>
<span class="quotelev2">&gt;  &gt; I am using school's high performance computer.
</span><br>
<span class="quotelev2">&gt;  &gt; But the openmpi there is version 1.3.2, old, so I want to build the new one.
</span><br>
<span class="quotelev2">&gt;  &gt;  
</span><br>
<span class="quotelev2">&gt;  &gt; I am new to openmpi, I have built the openmpi and it doesn't work, I 
</span><br>
<span class="quotelev2">&gt;  &gt; built and installed it to my own directory.
</span><br>
<span class="quotelev2">&gt;  &gt; I use the following configure options,
</span><br>
<span class="quotelev2">&gt;  &gt;  
</span><br>
<span class="quotelev2">&gt;  &gt; ./configure --with-sge --prefix=$MY_OWN_DIR --with-psm
</span><br>
<span class="quotelev2">&gt;  &gt;  
</span><br>
<span class="quotelev2">&gt;  &gt; but it won't work and failed with somelines like
</span><br>
<span class="quotelev2">&gt;  &gt; ......lib/openmpi/mca_ess_hnp: file not found (ignored)
</span><br>
<span class="quotelev2">&gt;  &gt; in the output file.
</span><br>
<span class="quotelev2">&gt;  &gt;  
</span><br>
<span class="quotelev2">&gt;  &gt; I guess my configure is wrong, could you tell me the meaning of 
</span><br>
<span class="quotelev2">&gt;  &gt; --with-psm, --with-sge, do I need to add other options? I guess the 
</span><br>
<span class="quotelev2">&gt;  &gt; computing nodes are using infiniband, but how to build with that? If I 
</span><br>
<span class="quotelev2">&gt;  &gt; don't have the su right, can I build it? What should I pay attettion if 
</span><br>
<span class="quotelev2">&gt;  &gt; I want to build and use my own openmpi?
</span><br>
<span class="quotelev2">&gt;  &gt;  
</span><br>
<span class="quotelev2">&gt;  &gt; You see, in a personal multicore computer, building is so easy and 
</span><br>
<span class="quotelev2">&gt;  &gt; mpirun the program without any problems. But in school's hpc, it fails 
</span><br>
<span class="quotelev2">&gt;  &gt; all the time.
</span><br>
<span class="quotelev2">&gt;  &gt;  
</span><br>
<span class="quotelev2">&gt;  &gt; Please help. Thank you all.
</span><br>
<span class="quotelev2">&gt;  &gt;  
</span><br>
<span class="quotelev2">&gt;  &gt;  
</span><br>
<span class="quotelev2">&gt;  &gt; Zhigang Wei
</span><br>
<span class="quotelev2">&gt;  &gt; ------------
</span><br>
<span class="quotelev2">&gt;  &gt; NatHaz Modeling Laboratory
</span><br>
<span class="quotelev2">&gt;  &gt; University of Notre Dame
</span><br>
<span class="quotelev2">&gt;  &gt; 112J FitzPatrick Hall
</span><br>
<span class="quotelev2">&gt;  &gt; Notre Dame, IN 46556 
</span><br>
<span class="quotelev2">&gt;  &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;  &gt; 2010-07-07
</span><br>
<span class="quotelev2">&gt;  &gt; 
</span><br>
<span class="quotelev2">&gt;  &gt; 
</span><br>
<span class="quotelev2">&gt;  &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;  &gt; 
</span><br>
<span class="quotelev2">&gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;  &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; .
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
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13544/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13545.php">Anton Shterenlikht: "[OMPI users] ipath_userinit: userinit command failed: Cannot allocate memory"</a>
<li><strong>Previous message:</strong> <a href="13543.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<li><strong>In reply to:</strong> <a href="13543.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13546.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<li><strong>Reply:</strong> <a href="13546.php">Gus Correa: "Re: [OMPI users] configure options"</a>
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
