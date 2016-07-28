<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 14 12:51:37 2006" -->
<!-- isoreceived="20060414165137" -->
<!-- sent="Fri, 14 Apr 2006 09:51:37 -0700" -->
<!-- isosent="20060414165137" -->
<!-- name="Warner Yuen" -->
<!-- email="wyuen_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI and Xgrid" -->
<!-- id="28962221-03F0-4D59-8CBC-348503FD665D_at_apple.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.2319.1145029972.3068.users_at_open-mpi.org" -->
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
<strong>From:</strong> Warner Yuen (<em>wyuen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-14 12:51:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1067.php">Prakash Velayutham: "[OMPI users] Open MPI error"</a>
<li><strong>Previous message:</strong> <a href="1065.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I did get MrBayes to run with Xgrid compiled with OpenMPI. However it  
<br>
was setup as more of a &quot;traditional&quot; cluster. The agents all have a  
<br>
shared NFS directory to the controller. Basically I'm only using  
<br>
Xgrid as a job scheduler. It doesn't seem as if MrBayes is a &quot;grid&quot;  
<br>
application but more of an application for a traidional cluster.
<br>
<p>You will need to have the following enabled:
<br>
<p>1) NFS shared directory across all the machines on the grid.
<br>
<p>2) Open-MPI installed locally on all the machines or via NFS. (You'll  
<br>
need to compile Open MPI)
<br>
<p>3) Here's the part that may make Xgrid not desirable to use for MPI  
<br>
applications:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) Compile with MPI support:
<br>
<p>MPI = yes
<br>
CC= $(MPIPATH)/bin/mpicc
<br>
CFLAGS = -fast
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) Make sure that Xgrid is set to properly use password-based  
<br>
authentication.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c) Set the environment variables for Open-MPI to use Xgrid as the  
<br>
laucher/scheduler. Assuming bash:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ export XGRID_CONTROLLER_HOSTNAME=mycomputer.apple.com
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ export XGRID_CONTROLLER_PASSWORD=passwd
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
You could also add the above to a .bashrc file and have  
<br>
your .bash_profile source it.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d) Run the MPI application:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ mpirun -np X ./myapp
<br>
<p>There are a couple of issues:
<br>
<p>It turns out that the directory and files that MrBayes creates must  
<br>
be readable and writable by all the agents. MrBayes requires more  
<br>
than just reading standard input/output but also the creation and  
<br>
writing of other intermediate files. For an application like HP  
<br>
Linpack that just reads and writes one file, things work fine.  
<br>
However, the MrBayes application writes out and reads back two  
<br>
additional files for each MPI process that is spawned.
<br>
<p>All the files that MrBayes are trying to read/write must have  
<br>
permissions for user 'nobody'.  This is a  bit of a problem, since  
<br>
you probably (in general) don't want to allow user nobody to write  
<br>
all over your home directory.  One solution (if possible) would be to  
<br>
have the application write into /tmp and then collect the files after  
<br>
the job completes. But I don't know if you can set MrBayes to use a  
<br>
temporary directory. Perhaps your MrBayes customer can let us know  
<br>
how to specify a tmpdir.
<br>
<p>I don't know how or if MrBayes has the option of specifying a temp  
<br>
working directory. I have tested the basics of this by executing an  
<br>
MPI command to copy the *.nex file to /tmp of all the agents. This  
<br>
seems allows everything to work, but I can't seem to easily clean the  
<br>
intermediate files off of the agents after this runs since the  
<br>
MrBayes application created them and the user doesn't own them.
<br>
<p>I'm hoping the OMPI developers can come to the rescue on some of  
<br>
these issues, perhaps working in conjunction with some of the Apple  
<br>
Xgrid engineers.
<br>
<p>Lastly, this is from one of the MrBayes folks:
<br>
<p>&quot;Getting help with Xgrid among the phylo community will probably be  
<br>
difficult.
<br>
Fredrik can't help and probably not anyone with CIPRES either.  Fredrik
<br>
recommends mpi since it is unix based and more people use it.
<br>
<p>He also does not recommend setting up a cluster in your lab to run  
<br>
MrBayes.
<br>
This is because of a fault with MrBayes. The way it is currently set  
<br>
up is that
<br>
the runs are only as fast as the slowest machine, in that if someone  
<br>
sits down
<br>
to use a machine in the cluster, everything is processed at that speed.
<br>
Here we use mpi for in parallel and condor to distribute for non- 
<br>
parallel.
<br>
<p>And frankly, MrBayes can be somewhat unstable with mpi and seems to  
<br>
get hung up
<br>
on occasion.
<br>
<p>Unfortunately for you, I think running large jobs will be a lot  
<br>
easier in a
<br>
couple of years.&quot;
<br>
<p>-Warner
<br>
<p>Warner Yuen
<br>
Apple Computer
<br>
email: wyuen_at_[hidden]
<br>
Tel: 408.718.2859
<br>
Fax: 408.715.0133
<br>
<p><p>On Apr 14, 2006, at 8:52 AM, users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Thu, 13 Apr 2006 14:33:29 -0400 (EDT)
</span><br>
<span class="quotelev1">&gt; From: liuliang_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] running a job problem
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; 	&lt;1122.164.107.248.223.1144953209.squirrel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain;charset=iso-8859-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian,
</span><br>
<span class="quotelev1">&gt; It worked when I used the latest version of Mrbayes. Thanks. By the  
</span><br>
<span class="quotelev1">&gt; way,
</span><br>
<span class="quotelev1">&gt; do  you have any idea to submit an ompi job on xgrid? Thanks again.
</span><br>
<span class="quotelev1">&gt; Liang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 12, 2006, at 9:09 AM, liuliang_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have a Mac network running xgrid and we have successfully  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi. We want to run a parallell version of mrbayes. It did not have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem when we compiled mrbayes using mpicc. But when we tried to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled mrbayes, we got lots errror message
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -np 4 ./mb -i  yeast_noclock_imp.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Parallel version of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Parallel version of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Parallel version of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Parallel version of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ea285fltprinter.scc.ohio-state.edu:03327] *** An error occurred in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_comm_size
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ea285fltprinter.scc.ohio-state.edu:03327] *** on communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ea285fltprinter.scc.ohio-state.edu:03327] *** MPI_ERR_COMM: invalid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ea285fltprinter.scc.ohio-state.edu:03327] *** MPI_ERRORS_ARE_FATAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This indicates that the application is calling an MPI function with
</span><br>
<span class="quotelev2">&gt;&gt; an invalid communicator.  Unfortunately, this is a hard one to track
</span><br>
<span class="quotelev2">&gt;&gt; down without more information.  What version of mrbayes are you using
</span><br>
<span class="quotelev2">&gt;&gt; and can you share your input deck?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;    Brian Barrett
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI developer
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1066/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1067.php">Prakash Velayutham: "[OMPI users] Open MPI error"</a>
<li><strong>Previous message:</strong> <a href="1065.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
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
