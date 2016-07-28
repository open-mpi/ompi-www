<?
$subject_val = "Re: [OMPI users] vfs_write returned -14";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 20 13:49:03 2009" -->
<!-- isoreceived="20090620174903" -->
<!-- sent="Sat, 20 Jun 2009 10:48:57 -0700 (PDT)" -->
<!-- isosent="20090620174857" -->
<!-- name="Kritiraj Sajadah" -->
<!-- email="ksajadah_at_[hidden]" -->
<!-- subject="Re: [OMPI users] vfs_write returned -14" -->
<!-- id="221937.16165.qm_at_web31001.mail.mud.yahoo.com" -->
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
<strong>Date:</strong> 2009-06-20 13:48:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9658.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>Previous message:</strong> <a href="9656.php">Rajesh Sudarsan: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="9624.php">Kritiraj Sajadah: "[OMPI users] vfs_write returned -14"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9658.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>Reply:</strong> <a href="9658.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thank you for the email. I can now checkpoint the application on the cluster using  OPEN MPI. But I am now facing another problem.
<br>
<p>When i tried restarting the checkpoint, nothing happens. I copied the checkpoint file to the $HOME directory and tried restarting it there and got the following error:
<br>
<p>- open('/var/cache/nscd/passwd', 0x0) failed: -13
<br>
- mmap failed: /var/cache/nscd/passwd
<br>
- thaw_threads returned error, aborting. -13
<br>
- thaw_threads returned error, aborting. -13
<br>
- thaw_threads returned error, aborting. -13
<br>
Restart failed: Permission denied
<br>
<p>On my laptop it works fine. So, I am assuming its again something to do with my $HOME directory.
<br>
<p>Is it possible to restart the chekpoint from the /tmp directory itself without have to copy it back to the $HOME directory.
<br>
<p>I s there another way to compile and build openmpi so that everthing happens in the /tmp directory instead of the $HOME directory?
<br>
<p>Thank you
<br>
<p>Raj
<br>
<p>--- On Fri, 6/19/09, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] vfs_write returned -14
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Friday, June 19, 2009, 2:48 PM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 18, 2009, at 7:33 PM, Kritiraj Sajadah wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello Josh,
</span><br>
<span class="quotelev2">&gt; &gt;&#160; &#160; &#160; &#160; &#160;&#160;&#160;ThanK you
</span><br>
<span class="quotelev1">&gt; again for your respond. I tried chekpointing a&#160; 
</span><br>
<span class="quotelev2">&gt; &gt; simple c program using BLCR...and got the same error,
</span><br>
<span class="quotelev1">&gt; i.e:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - vfs_write returned -14
</span><br>
<span class="quotelev2">&gt; &gt; - file_header: write returned -14
</span><br>
<span class="quotelev2">&gt; &gt; Checkpoint failed: Bad address
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I would look at how your NFS file system is setup, and
</span><br>
<span class="quotelev1">&gt; work with&#160; 
</span><br>
<span class="quotelev1">&gt; your sysadmin (and maybe the BLCR list) to resolve this
</span><br>
<span class="quotelev1">&gt; before&#160; 
</span><br>
<span class="quotelev1">&gt; experimenting too much with checkpointing with Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is how i installed and run mpi programs for
</span><br>
<span class="quotelev1">&gt; checkpointing:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) configure and install blcr
</span><br>
<span class="quotelev2">&gt; &gt; 2) configure and install openmpi
</span><br>
<span class="quotelev2">&gt; &gt; 3)&#160; Compile and run mpi program as follows:
</span><br>
<span class="quotelev2">&gt; &gt; 4) To checkpoint the running program,
</span><br>
<span class="quotelev2">&gt; &gt; 5) To restart your checkpoint, locate the checkpoint
</span><br>
<span class="quotelev1">&gt; file and type&#160; 
</span><br>
<span class="quotelev2">&gt; &gt; the following from the command line:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This all looks ok to me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The did another test with BLCR however,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried checkpointing my c application from the /tmp
</span><br>
<span class="quotelev1">&gt; directory&#160; 
</span><br>
<span class="quotelev2">&gt; &gt; instead of my $HOME directory and it checkpointed
</span><br>
<span class="quotelev1">&gt; fine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So, it looks like the problem is with my $HOME
</span><br>
<span class="quotelev1">&gt; directory.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have &quot;drwx&quot; rights on my $HOME directory which seems
</span><br>
<span class="quotelev1">&gt; fine for me.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Then i tried it with open MPI.&#160; However, with
</span><br>
<span class="quotelev1">&gt; open mpi the&#160; 
</span><br>
<span class="quotelev2">&gt; &gt; checkpoint file automatically get saved in the $HOME
</span><br>
<span class="quotelev1">&gt; directory.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there a way to have the file saved in a different
</span><br>
<span class="quotelev1">&gt; location? I&#160; 
</span><br>
<span class="quotelev2">&gt; &gt; checked that LAM/MPI has some command line&#160;
</span><br>
<span class="quotelev1">&gt; options :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun -np 2 -ssi cr_base_dir /somewhere/else a.out
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do we have a similar option for open mpi?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By default Open MPI places the global snapshot in the $HOME
</span><br>
<span class="quotelev1">&gt; directory.&#160; 
</span><br>
<span class="quotelev1">&gt; But you can also specify a different directory for the
</span><br>
<span class="quotelev1">&gt; global snapshot&#160; 
</span><br>
<span class="quotelev1">&gt; using the following MCA option:
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;-mca snapc_base_global_snapshot_dir
</span><br>
<span class="quotelev1">&gt; /somewhere/else
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the best results you will likely want to set this in
</span><br>
<span class="quotelev1">&gt; the MCA&#160; 
</span><br>
<span class="quotelev1">&gt; params file in your home directory:
</span><br>
<span class="quotelev1">&gt; &#160; shell$ cat ~/.openmpi/mca-params.conf
</span><br>
<span class="quotelev1">&gt; &#160; snapc_base_global_snapshot_dir=/somewhere/else
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can also stage the file to local disk, then have Open
</span><br>
<span class="quotelev1">&gt; MPI transfer&#160; 
</span><br>
<span class="quotelev1">&gt; the checkpoints back to a {logically} central storage
</span><br>
<span class="quotelev1">&gt; device (both can&#160; 
</span><br>
<span class="quotelev1">&gt; be /tmp on a local disk if you like). For more details on
</span><br>
<span class="quotelev1">&gt; this and the&#160; 
</span><br>
<span class="quotelev1">&gt; above option you will want to read through the FT Users
</span><br>
<span class="quotelev1">&gt; Guide attached&#160; 
</span><br>
<span class="quotelev1">&gt; to the wiki page at the link below:
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;<a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks a lot
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Raj
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --- On Wed, 6/17/09, Josh Hursey &lt;jjhursey_at_[hidden]&gt;
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
<span class="quotelev3">&gt; &gt;&gt; Date: Wednesday, June 17, 2009, 1:42 AM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Did you try checkpointing a non-MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; application with BLCR on the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cluster? If that does not work then I would
</span><br>
<span class="quotelev1">&gt; suspect that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; BLCR is not
</span><br>
<span class="quotelev3">&gt; &gt;&gt; working properly on the system.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However if a non-MPI application can be
</span><br>
<span class="quotelev1">&gt; checkpointed and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; restarted
</span><br>
<span class="quotelev3">&gt; &gt;&gt; correctly on this machine then it may be something
</span><br>
<span class="quotelev1">&gt; odd with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the Open
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI installation or runtime environment. To help
</span><br>
<span class="quotelev1">&gt; debug here
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I would
</span><br>
<span class="quotelev3">&gt; &gt;&gt; need to know how Open MPI was configured and how
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; application was
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ran on the machine (command line arguments,
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev3">&gt; &gt;&gt; variables, ...).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I should note that for the program that you sent
</span><br>
<span class="quotelev1">&gt; it is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; important that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; you compile Open MPI with the Fault Tolerance
</span><br>
<span class="quotelev1">&gt; Thread
</span><br>
<span class="quotelev3">&gt; &gt;&gt; enabled to ensure
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a timely checkpoint. Otherwise the checkpoint will
</span><br>
<span class="quotelev1">&gt; be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; delayed until
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the MPI program enters the MPI_Finalize function.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Let me know what you find out.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 16, 2009, at 5:08 PM, Kritiraj Sajadah
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi Josh,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks for the email. I have install BLCR
</span><br>
<span class="quotelev1">&gt; 0.8.1 and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; openmpi 1.3 on
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; my laptop with Ubuntu 8.04 on it. It works
</span><br>
<span class="quotelev1">&gt; fine.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I now tried the installation on the cluster (
</span><br>
<span class="quotelev1">&gt; on one
</span><br>
<span class="quotelev3">&gt; &gt;&gt; machine for
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; now) in my university. ( the administrator
</span><br>
<span class="quotelev1">&gt; installed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it) i am not
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; sure if he followed the steps i gave him.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I am checkpointing a simple mpi application
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev3">&gt; &gt;&gt; looks as follows:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; int rank,size;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; printf(&quot;I am processor no %d of a total of %d
</span><br>
<span class="quotelev1">&gt; procs
</span><br>
<span class="quotelev3">&gt; &gt;&gt; \n&quot;, rank, size);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; system(&quot;sleep 30&quot;);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; printf(&quot;I am processor no %d of a total of %d
</span><br>
<span class="quotelev1">&gt; procs
</span><br>
<span class="quotelev3">&gt; &gt;&gt; \n&quot;, rank, size);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; system(&quot;sleep 30&quot;);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; printf(&quot;I am processor no %d of a total of %d
</span><br>
<span class="quotelev1">&gt; procs
</span><br>
<span class="quotelev3">&gt; &gt;&gt; \n&quot;, rank, size);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; system(&quot;sleep 30&quot;);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; printf(&quot;bye \n&quot;);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; return 0;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Do you think its better to re install BLCR?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Raj
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --- On Tue, 6/16/09, Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subject: Re: [OMPI users] vfs_write
</span><br>
<span class="quotelev1">&gt; returned -14
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Date: Tuesday, June 16, 2009, 6:42 PM
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; These are errors from BLCR. It may be a
</span><br>
<span class="quotelev1">&gt; problem
</span><br>
<span class="quotelev3">&gt; &gt;&gt; with your
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; BLCR installation and/or your application.
</span><br>
<span class="quotelev1">&gt; Are you
</span><br>
<span class="quotelev3">&gt; &gt;&gt; able to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; checkpoint/restart a non-MPI application
</span><br>
<span class="quotelev1">&gt; with BLCR
</span><br>
<span class="quotelev3">&gt; &gt;&gt; on these
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; machines?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; What kind of MPI application are you
</span><br>
<span class="quotelev1">&gt; trying to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checkpoint?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Some of the MPI interfaces are not fully
</span><br>
<span class="quotelev1">&gt; supported
</span><br>
<span class="quotelev3">&gt; &gt;&gt; at the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; moment (outlined in the FT User Document
</span><br>
<span class="quotelev1">&gt; that I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mentioned in
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; a previous email).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Jun 16, 2009, at 11:30 AM, Kritiraj
</span><br>
<span class="quotelev1">&gt; Sajadah
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Dear All,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160; I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; have install
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; openmpi 1.3 and blcr 0.8.1 on a linux
</span><br>
<span class="quotelev1">&gt; machine
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (ubuntu).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; however, when i try checkpointing an MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; application, I get
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; the following error:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; - vfs_write returned -14
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; - file_header: write returned -14
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Can someone help please.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Raj
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="9658.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>Previous message:</strong> <a href="9656.php">Rajesh Sudarsan: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="9624.php">Kritiraj Sajadah: "[OMPI users] vfs_write returned -14"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9658.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>Reply:</strong> <a href="9658.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
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
