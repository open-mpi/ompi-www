<?
$subject_val = "Re: [OMPI users] vfs_write returned -14";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 18 19:33:20 2009" -->
<!-- isoreceived="20090618233320" -->
<!-- sent="Thu, 18 Jun 2009 16:33:15 -0700 (PDT)" -->
<!-- isosent="20090618233315" -->
<!-- name="Kritiraj Sajadah" -->
<!-- email="ksajadah_at_[hidden]" -->
<!-- subject="Re: [OMPI users] vfs_write returned -14" -->
<!-- id="571495.45078.qm_at_web31002.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] vfs_write returned -14" -->
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
<strong>Subject:</strong> Re: [OMPI users] vfs_write returned -14<br>
<strong>From:</strong> Kritiraj Sajadah (<em>ksajadah_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-18 19:33:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9636.php">Ralph Castain: "Re: [OMPI users] mpirun fails on the host"</a>
<li><strong>Previous message:</strong> <a href="9634.php">Honest Guvnor: "[OMPI users] mpirun fails on the host"</a>
<li><strong>Maybe in reply to:</strong> <a href="9624.php">Kritiraj Sajadah: "[OMPI users] vfs_write returned -14"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9638.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>Reply:</strong> <a href="9638.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Josh,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ThanK you again for your respond. I tried chekpointing a simple c program using BLCR...and got the same error, i.e:
<br>
<p>- vfs_write returned -14
<br>
- file_header: write returned -14
<br>
Checkpoint failed: Bad address
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
This is how i installed and run mpi programs for checkpointing:
<br>
<p>1) configure and install blcr
<br>
<p>tar zxf blcr-&lt;VERSION&gt;.tar.gz
<br>
cd blcr-&lt;VERSION&gt;
<br>
mkdir builddir
<br>
cd builddir
<br>
<p>../configure --prefix=/usr/local/ --enable-debug=yes --enable-libcr-tracing=yes --enable-kernel-tracing=yes --enable-testsuite=yes --enable-all-static=yes --enable-static=yes
<br>
<p>make
<br>
make install
<br>
<p>2) configure and install openmpi
<br>
<p>./configure --prefix=/usr/local/ --enable-picky --enable-debug --enable-mpi-profile --enable-mpi-cxx --enable-pretty-print-stacktrace --enable-binaries --enable-trace --enable-static=yes --enable-debug --with-devel-headers=1 --with-mpi-param-check=always --with-ft=cr --enable-ft-thread --with-blcr=/usr/local/ --with-blcr-libdir=/usr/local/lib --enable-mpi-threads=yes
<br>
<p>make all install
<br>
<p>3)  Compile and run mpi program as follows:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;raj&gt; mpicc helloworld.c -o helloworld
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;raj&gt; mpirun -am ft-enable-cr helloworld
<br>
<p>4) To checkpoint the running program,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;raj&gt;  ompi-checkpoint [any option] pid 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for example:   ompi-checkpoint -v 11527
<br>
<p>5) To restart your checkpoint, locate the checkpoint file and type the following from the command line:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;raj&gt; mpi-restart ompi_global_snapshot_XXXX.ckpt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>The did another test with BLCR however,
<br>
<p>I tried checkpointing my c application from the /tmp directory instead of my $HOME directory and it checkpointed fine.
<br>
<p>So, it looks like the problem is with my $HOME directory.
<br>
<p>I have &quot;drwx&quot; rights on my $HOME directory which seems fine for me.
<br>
<p>Then i tried it with open MPI.  However, with open mpi the checkpoint file automatically get saved in the $HOME directory. 
<br>
<p>Is there a way to have the file saved in a different location? I checked that LAM/MPI has some command line  options :
<br>
<p>$ mpirun -np 2 -ssi cr_base_dir /somewhere/else a.out
<br>
<p>Do we have a similar option for open mpi?
<br>
<p>Thanks a lot
<br>
<p>regards,
<br>
<p>Raj
<br>
<p>--- On Wed, 6/17/09, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] vfs_write returned -14
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Wednesday, June 17, 2009, 1:42 AM
</span><br>
<span class="quotelev1">&gt; Did you try checkpointing a non-MPI
</span><br>
<span class="quotelev1">&gt; application with BLCR on the&#160; 
</span><br>
<span class="quotelev1">&gt; cluster? If that does not work then I would suspect that
</span><br>
<span class="quotelev1">&gt; BLCR is not&#160; 
</span><br>
<span class="quotelev1">&gt; working properly on the system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However if a non-MPI application can be checkpointed and
</span><br>
<span class="quotelev1">&gt; restarted&#160; 
</span><br>
<span class="quotelev1">&gt; correctly on this machine then it may be something odd with
</span><br>
<span class="quotelev1">&gt; the Open&#160; 
</span><br>
<span class="quotelev1">&gt; MPI installation or runtime environment. To help debug here
</span><br>
<span class="quotelev1">&gt; I would&#160; 
</span><br>
<span class="quotelev1">&gt; need to know how Open MPI was configured and how the
</span><br>
<span class="quotelev1">&gt; application was&#160; 
</span><br>
<span class="quotelev1">&gt; ran on the machine (command line arguments, environment
</span><br>
<span class="quotelev1">&gt; variables, ...).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I should note that for the program that you sent it is
</span><br>
<span class="quotelev1">&gt; important that&#160; 
</span><br>
<span class="quotelev1">&gt; you compile Open MPI with the Fault Tolerance Thread
</span><br>
<span class="quotelev1">&gt; enabled to ensure&#160; 
</span><br>
<span class="quotelev1">&gt; a timely checkpoint. Otherwise the checkpoint will be
</span><br>
<span class="quotelev1">&gt; delayed until&#160; 
</span><br>
<span class="quotelev1">&gt; the MPI program enters the MPI_Finalize function.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know what you find out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 16, 2009, at 5:08 PM, Kritiraj Sajadah wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Josh,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the email. I have install BLCR 0.8.1 and
</span><br>
<span class="quotelev1">&gt; openmpi 1.3 on&#160; 
</span><br>
<span class="quotelev2">&gt; &gt; my laptop with Ubuntu 8.04 on it. It works fine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I now tried the installation on the cluster ( on one
</span><br>
<span class="quotelev1">&gt; machine for&#160; 
</span><br>
<span class="quotelev2">&gt; &gt; now) in my university. ( the administrator installed
</span><br>
<span class="quotelev1">&gt; it) i am not&#160; 
</span><br>
<span class="quotelev2">&gt; &gt; sure if he followed the steps i gave him.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am checkpointing a simple mpi application which
</span><br>
<span class="quotelev1">&gt; looks as follows:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; int rank,size;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt; &gt; printf(&quot;I am processor no %d of a total of %d procs
</span><br>
<span class="quotelev1">&gt; \n&quot;, rank, size);
</span><br>
<span class="quotelev2">&gt; &gt; system(&quot;sleep 30&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; printf(&quot;I am processor no %d of a total of %d procs
</span><br>
<span class="quotelev1">&gt; \n&quot;, rank, size);
</span><br>
<span class="quotelev2">&gt; &gt; system(&quot;sleep 30&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; printf(&quot;I am processor no %d of a total of %d procs
</span><br>
<span class="quotelev1">&gt; \n&quot;, rank, size);
</span><br>
<span class="quotelev2">&gt; &gt; system(&quot;sleep 30&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; printf(&quot;bye \n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt; return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you think its better to re install BLCR?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Raj
</span><br>
<span class="quotelev2">&gt; &gt; --- On Tue, 6/16/09, Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI users] vfs_write returned -14
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date: Tuesday, June 16, 2009, 6:42 PM
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; These are errors from BLCR. It may be a problem
</span><br>
<span class="quotelev1">&gt; with your
</span><br>
<span class="quotelev3">&gt; &gt;&gt; BLCR installation and/or your application. Are you
</span><br>
<span class="quotelev1">&gt; able to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checkpoint/restart a non-MPI application with BLCR
</span><br>
<span class="quotelev1">&gt; on these
</span><br>
<span class="quotelev3">&gt; &gt;&gt; machines?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What kind of MPI application are you trying to
</span><br>
<span class="quotelev1">&gt; checkpoint?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Some of the MPI interfaces are not fully supported
</span><br>
<span class="quotelev1">&gt; at the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; moment (outlined in the FT User Document that I
</span><br>
<span class="quotelev1">&gt; mentioned in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a previous email).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 16, 2009, at 11:30 AM, Kritiraj Sajadah
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Dear All,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160;&#160;&#160;I
</span><br>
<span class="quotelev1">&gt; have install
</span><br>
<span class="quotelev3">&gt; &gt;&gt; openmpi 1.3 and blcr 0.8.1 on a linux machine
</span><br>
<span class="quotelev1">&gt; (ubuntu).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; however, when i try checkpointing an MPI
</span><br>
<span class="quotelev1">&gt; application, I get
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the following error:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - vfs_write returned -14
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - file_header: write returned -14
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Can someone help please.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Raj
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9636.php">Ralph Castain: "Re: [OMPI users] mpirun fails on the host"</a>
<li><strong>Previous message:</strong> <a href="9634.php">Honest Guvnor: "[OMPI users] mpirun fails on the host"</a>
<li><strong>Maybe in reply to:</strong> <a href="9624.php">Kritiraj Sajadah: "[OMPI users] vfs_write returned -14"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9638.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>Reply:</strong> <a href="9638.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
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
