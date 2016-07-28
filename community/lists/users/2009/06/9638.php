<?
$subject_val = "Re: [OMPI users] vfs_write returned -14";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 09:48:32 2009" -->
<!-- isoreceived="20090619134832" -->
<!-- sent="Fri, 19 Jun 2009 09:48:26 -0400" -->
<!-- isosent="20090619134826" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] vfs_write returned -14" -->
<!-- id="E5988F4A-99B5-4E08-A837-1AF0F964E46A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="571495.45078.qm_at_web31002.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-19 09:48:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9639.php">Mark Bolstad: "[OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Previous message:</strong> <a href="9637.php">Honest Guvnor: "Re: [OMPI users] mpirun fails on the host"</a>
<li><strong>In reply to:</strong> <a href="9635.php">Kritiraj Sajadah: "Re: [OMPI users] vfs_write returned -14"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9657.php">Kritiraj Sajadah: "Re: [OMPI users] vfs_write returned -14"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 18, 2009, at 7:33 PM, Kritiraj Sajadah wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Josh,
</span><br>
<span class="quotelev1">&gt;           ThanK you again for your respond. I tried chekpointing a  
</span><br>
<span class="quotelev1">&gt; simple c program using BLCR...and got the same error, i.e:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - vfs_write returned -14
</span><br>
<span class="quotelev1">&gt; - file_header: write returned -14
</span><br>
<span class="quotelev1">&gt; Checkpoint failed: Bad address
</span><br>
<p>So I would look at how your NFS file system is setup, and work with  
<br>
your sysadmin (and maybe the BLCR list) to resolve this before  
<br>
experimenting too much with checkpointing with Open MPI.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is how i installed and run mpi programs for checkpointing:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) configure and install blcr
</span><br>
<span class="quotelev1">&gt; 2) configure and install openmpi
</span><br>
<span class="quotelev1">&gt; 3)  Compile and run mpi program as follows:
</span><br>
<span class="quotelev1">&gt; 4) To checkpoint the running program,
</span><br>
<span class="quotelev1">&gt; 5) To restart your checkpoint, locate the checkpoint file and type  
</span><br>
<span class="quotelev1">&gt; the following from the command line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This all looks ok to me.
<br>
<p><span class="quotelev1">&gt; The did another test with BLCR however,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried checkpointing my c application from the /tmp directory  
</span><br>
<span class="quotelev1">&gt; instead of my $HOME directory and it checkpointed fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, it looks like the problem is with my $HOME directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have &quot;drwx&quot; rights on my $HOME directory which seems fine for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then i tried it with open MPI.  However, with open mpi the  
</span><br>
<span class="quotelev1">&gt; checkpoint file automatically get saved in the $HOME directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to have the file saved in a different location? I  
</span><br>
<span class="quotelev1">&gt; checked that LAM/MPI has some command line  options :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 -ssi cr_base_dir /somewhere/else a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do we have a similar option for open mpi?
</span><br>
<p>By default Open MPI places the global snapshot in the $HOME directory.  
<br>
But you can also specify a different directory for the global snapshot  
<br>
using the following MCA option:
<br>
&nbsp;&nbsp;&nbsp;-mca snapc_base_global_snapshot_dir /somewhere/else
<br>
<p>For the best results you will likely want to set this in the MCA  
<br>
params file in your home directory:
<br>
&nbsp;&nbsp;shell$ cat ~/.openmpi/mca-params.conf
<br>
&nbsp;&nbsp;snapc_base_global_snapshot_dir=/somewhere/else
<br>
<p>You can also stage the file to local disk, then have Open MPI transfer  
<br>
the checkpoints back to a {logically} central storage device (both can  
<br>
be /tmp on a local disk if you like). For more details on this and the  
<br>
above option you will want to read through the FT Users Guide attached  
<br>
to the wiki page at the link below:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Raj
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Wed, 6/17/09, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] vfs_write returned -14
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wednesday, June 17, 2009, 1:42 AM
</span><br>
<span class="quotelev2">&gt;&gt; Did you try checkpointing a non-MPI
</span><br>
<span class="quotelev2">&gt;&gt; application with BLCR on the
</span><br>
<span class="quotelev2">&gt;&gt; cluster? If that does not work then I would suspect that
</span><br>
<span class="quotelev2">&gt;&gt; BLCR is not
</span><br>
<span class="quotelev2">&gt;&gt; working properly on the system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However if a non-MPI application can be checkpointed and
</span><br>
<span class="quotelev2">&gt;&gt; restarted
</span><br>
<span class="quotelev2">&gt;&gt; correctly on this machine then it may be something odd with
</span><br>
<span class="quotelev2">&gt;&gt; the Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI installation or runtime environment. To help debug here
</span><br>
<span class="quotelev2">&gt;&gt; I would
</span><br>
<span class="quotelev2">&gt;&gt; need to know how Open MPI was configured and how the
</span><br>
<span class="quotelev2">&gt;&gt; application was
</span><br>
<span class="quotelev2">&gt;&gt; ran on the machine (command line arguments, environment
</span><br>
<span class="quotelev2">&gt;&gt; variables, ...).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I should note that for the program that you sent it is
</span><br>
<span class="quotelev2">&gt;&gt; important that
</span><br>
<span class="quotelev2">&gt;&gt; you compile Open MPI with the Fault Tolerance Thread
</span><br>
<span class="quotelev2">&gt;&gt; enabled to ensure
</span><br>
<span class="quotelev2">&gt;&gt; a timely checkpoint. Otherwise the checkpoint will be
</span><br>
<span class="quotelev2">&gt;&gt; delayed until
</span><br>
<span class="quotelev2">&gt;&gt; the MPI program enters the MPI_Finalize function.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me know what you find out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 16, 2009, at 5:08 PM, Kritiraj Sajadah wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Josh,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the email. I have install BLCR 0.8.1 and
</span><br>
<span class="quotelev2">&gt;&gt; openmpi 1.3 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my laptop with Ubuntu 8.04 on it. It works fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I now tried the installation on the cluster ( on one
</span><br>
<span class="quotelev2">&gt;&gt; machine for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now) in my university. ( the administrator installed
</span><br>
<span class="quotelev2">&gt;&gt; it) i am not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sure if he followed the steps i gave him.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am checkpointing a simple mpi application which
</span><br>
<span class="quotelev2">&gt;&gt; looks as follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int rank,size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; printf(&quot;I am processor no %d of a total of %d procs
</span><br>
<span class="quotelev2">&gt;&gt; \n&quot;, rank, size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system(&quot;sleep 30&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; printf(&quot;I am processor no %d of a total of %d procs
</span><br>
<span class="quotelev2">&gt;&gt; \n&quot;, rank, size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system(&quot;sleep 30&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; printf(&quot;I am processor no %d of a total of %d procs
</span><br>
<span class="quotelev2">&gt;&gt; \n&quot;, rank, size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system(&quot;sleep 30&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; printf(&quot;bye \n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you think its better to re install BLCR?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Raj
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- On Tue, 6/16/09, Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] vfs_write returned -14
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: Tuesday, June 16, 2009, 6:42 PM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; These are errors from BLCR. It may be a problem
</span><br>
<span class="quotelev2">&gt;&gt; with your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BLCR installation and/or your application. Are you
</span><br>
<span class="quotelev2">&gt;&gt; able to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checkpoint/restart a non-MPI application with BLCR
</span><br>
<span class="quotelev2">&gt;&gt; on these
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; machines?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What kind of MPI application are you trying to
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Some of the MPI interfaces are not fully supported
</span><br>
<span class="quotelev2">&gt;&gt; at the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; moment (outlined in the FT User Document that I
</span><br>
<span class="quotelev2">&gt;&gt; mentioned in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a previous email).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 16, 2009, at 11:30 AM, Kritiraj Sajadah
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            I
</span><br>
<span class="quotelev2">&gt;&gt; have install
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi 1.3 and blcr 0.8.1 on a linux machine
</span><br>
<span class="quotelev2">&gt;&gt; (ubuntu).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; however, when i try checkpointing an MPI
</span><br>
<span class="quotelev2">&gt;&gt; application, I get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the following error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - vfs_write returned -14
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - file_header: write returned -14
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can someone help please.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Raj
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9639.php">Mark Bolstad: "[OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Previous message:</strong> <a href="9637.php">Honest Guvnor: "Re: [OMPI users] mpirun fails on the host"</a>
<li><strong>In reply to:</strong> <a href="9635.php">Kritiraj Sajadah: "Re: [OMPI users] vfs_write returned -14"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9657.php">Kritiraj Sajadah: "Re: [OMPI users] vfs_write returned -14"</a>
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
