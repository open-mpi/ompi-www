<?
$subject_val = "Re: [OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 15 01:32:05 2008" -->
<!-- isoreceived="20080315053205" -->
<!-- sent="Sat, 15 Mar 2008 13:31:56 +0800" -->
<!-- isosent="20080315053156" -->
<!-- name="Rolly Ng" -->
<!-- email="50008104_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Please help &amp;quot;orte_init failed error&amp;quot; running simple MPI code" -->
<!-- id="000001c8865d$e23d0730$a6b71590$_at_cityu.edu.hk" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="760B1AF3-80E8-498F-89C0-75C80BD125B5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code<br>
<strong>From:</strong> Rolly Ng (<em>50008104_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-15 01:31:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5206.php">Ralph Castain: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<li><strong>Previous message:</strong> <a href="5204.php">Ralph Castain: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<li><strong>In reply to:</strong> <a href="5201.php">Jeff Squyres: "Re: [OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5207.php">Jeff Squyres: "Re: [OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
<li><strong>Reply:</strong> <a href="5207.php">Jeff Squyres: "Re: [OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thanks for your advice, I have solved my error and I should have read the
<br>
FAQ. The two commands are reallt helpful:)
<br>
mpiCC --showme:compile
<br>
mpiCC --showme:link
<br>
<p>But configuring KDevelop for the shown compile+link option are a bit
<br>
confusing for newbies like me :)
<br>
<p>Well, after trial-n-error I think I got the answer, and I hope it would be
<br>
helpful for those KDevelop+OpenMPI newcomers (KDevelop 3.4.1):
<br>
<p>(1)Project-&gt;Project Option-&gt;Configure Option-&gt;General-&gt;Linker flags,
<br>
copy&amp;paste the output of the --showme:link
<br>
(2)Environment variables, add LD_LIBRARY_PATH [/usr/local/lib] and PATH
<br>
[/usr/local/bin],  where [/xx/xx/xx] is your openMPI install directory
<br>
(3)Project-&gt;Project Option-&gt;Configure Option-&gt;C++-&gt;Compiler flags,
<br>
copy&amp;paste the output of the --showme:compiler
<br>
(4)Automake manager-&gt;Target options-&gt;Libraries-&gt;link libraries outside
<br>
project, add all the .a or .so installed in your openMPI directory
<br>
<p>Now I can compile and run without problem! :)
<br>
<p>But I still have a question unsolved by press the shift+F9 (&quot;Gear icon&quot;),
<br>
Konsole run its default -e /bin/sh -c and I cannnot run with &quot;mpirun -np 4&quot;
<br>
on a multicore Xeon PC? I have check the Project-&gt;Project Option-&gt;Run Option
<br>
but seems I can only pass argument but not customized execute command?!
<br>
<p>How can I tell Konsole to run &quot;mpirun -np 4&quot; when I press the &quot;Gear icon&quot;?
<br>
Thanks!
<br>
<p>Rolly
<br>
<p>-----Original Message-----
<br>
From: Jeff Squyres [mailto:jsquyres_at_[hidden]] 
<br>
Sent: 2008年3月15日 7:45
<br>
To: 50008104_at_[hidden]; Open MPI Users
<br>
Subject: Re: [OMPI users] Please help &quot;orte_init failed error&quot; running
<br>
simple MPI code
<br>
<p>Two things:
<br>
<p>- You might want to run &quot;mpicc --showme&quot; to get the list of compiler/ 
<br>
linker flags to put into KDevelop.  Better yet, if you can get  
<br>
KDevelop to use mpicc (etc.) instead of gcc, that would avoid you  
<br>
needing to explicitly list anything in terms of libraries, header  
<br>
locations, etc.
<br>
<p>- Check that your system didn't come with Open MPI already installed.   
<br>
If so, you may accidentally be mixing and matching two different  
<br>
versions (e.g., the 1.2.5 that you installed and the version that came  
<br>
pre-installed).  We do not [yet] guarantee binary compatibility  
<br>
between different versions of Open MPI, so if you're mixing them, Bad  
<br>
Things can happen.
<br>
<p><p><p>On Mar 13, 2008, at 11:33 AM, Rolly Ng wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am new to open-MPI programming and I have a strange error while  
</span><br>
<span class="quotelev1">&gt; running my simple code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My platform is a IBM T42 notebook with just a single-core processor,  
</span><br>
<span class="quotelev1">&gt; and I just installed OpenSuSE 10.3 with KDevelop as my IDE. I have  
</span><br>
<span class="quotelev1">&gt; downloaded the openmpi-1.2.5.tar.gz and install using the commands,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; shell$ gunzip -c openmpi-1.2.5.tar.gz | tar xf - shell$ cd  
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.5 shell$ ./configure --prefix=/usr/local &lt;...lots of  
</span><br>
<span class="quotelev1">&gt; output...&gt; shell$ make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I add -lmpi, -lmpi_cxx, -lopen-pal, -lopen-rte, -lmca_common_sm  
</span><br>
<span class="quotelev1">&gt; options to the link libraries outside project (LDADD) in the  
</span><br>
<span class="quotelev1">&gt; Automake Manager inside Kdevelop. I have also added the PATH /usr/ 
</span><br>
<span class="quotelev1">&gt; local/bin and LD_LIBRARY_PATH /usr/local/lib in the Enviroment  
</span><br>
<span class="quotelev1">&gt; variables in the Run options of Project Options. I can compile my  
</span><br>
<span class="quotelev1">&gt; code with no error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are my codes,
</span><br>
<span class="quotelev1">&gt; #ifdef HAVE_CONFIG_H
</span><br>
<span class="quotelev1">&gt; #include &lt;config.h&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;math.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; //#include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; //#include &lt;cstdlib&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char ** argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int mynode, totalnodes;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;totalnodes);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;mynode);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   cout &lt;&lt; &quot;Hello world from processor &quot; &lt;&lt; mynode &lt;&lt; &quot; of &quot; &lt;&lt;  
</span><br>
<span class="quotelev1">&gt; totalnodes &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am expecting the output as: Hello world from processor 0 of 1. But  
</span><br>
<span class="quotelev1">&gt; it does not work and MPI failed to initialize. The output is strange:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [rollyopensuse:24924] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/ 
</span><br>
<span class="quotelev1">&gt; orte_init_stage1.c at line 312
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is likely to abort.  There are many reasons that a parallel  
</span><br>
<span class="quotelev1">&gt; process can fail during orte_init; some of which are due to  
</span><br>
<span class="quotelev1">&gt; configuration or environment problems.  This failure appears to be  
</span><br>
<span class="quotelev1">&gt; an internal failure; here's some additional information (which may  
</span><br>
<span class="quotelev1">&gt; only be relevant to an Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   orte_pls_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -1 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process  
</span><br>
<span class="quotelev1">&gt; is likely to abort.  There are many reasons that a parallel process  
</span><br>
<span class="quotelev1">&gt; can fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal  
</span><br>
<span class="quotelev1">&gt; failure; here's some additional information (which may only be  
</span><br>
<span class="quotelev1">&gt; relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ompi_mpi_init: orte_init_stage1 failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [rollyopensuse:24924] Abort before MPI_INIT completed successfully;  
</span><br>
<span class="quotelev1">&gt; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; Press Enter to continue!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did I must some important parameters while configuring the openMPI  
</span><br>
<span class="quotelev1">&gt; setup? How can I correct the error? Thank you very much!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Rolly
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5206.php">Ralph Castain: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<li><strong>Previous message:</strong> <a href="5204.php">Ralph Castain: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<li><strong>In reply to:</strong> <a href="5201.php">Jeff Squyres: "Re: [OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5207.php">Jeff Squyres: "Re: [OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
<li><strong>Reply:</strong> <a href="5207.php">Jeff Squyres: "Re: [OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
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
