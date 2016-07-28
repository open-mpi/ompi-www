<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 13:20:04 2009" -->
<!-- isoreceived="20090406172004" -->
<!-- sent="Mon, 06 Apr 2009 13:19:42 -0400" -->
<!-- isosent="20090406171942" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="49DA39AE.1020402_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="a599d60e0904060916g2bbcd43fpbe59428d854208b1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with running openMPI program<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 13:19:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8789.php">Gus Correa: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Previous message:</strong> <a href="8787.php">Steve Kargl: "[OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8785.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8800.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8800.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ankush
<br>
<p>Ankush Kaul wrote:
<br>
<span class="quotelev1">&gt; I am not able to check if NFS export/mount of /tmp is working,
</span><br>
<span class="quotelev1">&gt; when i give the command *ssh 192.168.45.65 192.168.67.18* i get the 
</span><br>
<span class="quotelev1">&gt; error : bash: 192.168.67.18 &lt;<a href="http://192.168.67.18/">http://192.168.67.18/</a>&gt;: command not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>The ssh command syntax above is wrong.
<br>
Use only one IP address, which should be your remote machine's IP.
<br>
<p>Assuming you are logged in to 192.168.67.18 (is this the master ?),
<br>
and want to ssh to 192.168.45.65 (is this the slave ?),
<br>
and run the command 'my_command' there, do:
<br>
<p>ssh 192.168.45.65 'my_command'
<br>
<p>If you already set up the passwordless ssh connection,
<br>
this should work.
<br>
<p><span class="quotelev1">&gt; let me explain what i understood using an example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, i make a folder '/work directory' on my master node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Yes ...
<br>
... but don't use spaces in Linux/Unix names! Never!
<br>
It is either &quot;/work&quot;
<br>
or &quot;/work_directory&quot;.
<br>
Using &quot;/work directory&quot; with a blank space in-between
<br>
is to ask for real trouble!
<br>
This is OK in Windows, but raises the hell on Linux/Unix.
<br>
In Linux/Unix blank space is a separator for everything,
<br>
so it will interpret only the first chunk of your directory name,
<br>
and think that what comes after the blank is another directory name,
<br>
or a command option, or whatever else.
<br>
<p>You can create subdirectories there also, to put your own
<br>
programs.
<br>
Or maybe one subdirectory
<br>
for each user, and change the ownership of each subdirectory
<br>
to the corresponding user.
<br>
<p>As root, on the master node, do:
<br>
<p>cd /work
<br>
whoami  (this will give you your own user-name)
<br>
mkdir user-name
<br>
chown  user-name:user-name  user-name  (pay attention to the : and blanks!)
<br>
<p><span class="quotelev1">&gt; Then i mount this directory on a folder named '/work directory/mnt' on 
</span><br>
<span class="quotelev1">&gt; the slave node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is this correct?
</span><br>
<p>No.
<br>
The easy thing to do is to use the same name for the mountpoint
<br>
as the original directory, say, /work only, if you called
<br>
it /work on the master node.
<br>
Again, don't use white space on Linux/Unix names!
<br>
<p>Create a mountpoint directory called /work on the slave node:
<br>
<p>mkdir /work
<br>
<p>Don't populate the slave node /work directory,
<br>
as it is just a mountpoint.
<br>
Leave it empty.
<br>
Then use it to mount the actual /work directory that you
<br>
want to export from the master node.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; also how and where (is it on the master node) do i give the list of 
</span><br>
<span class="quotelev1">&gt; hosts? 
</span><br>
<p>On the master node, in the mpirun command line.
<br>
<p>As I said, do &quot;/full/path/to/openmpi/bin/mpirun --help&quot; to get
<br>
a lot of information about the mpirun command options.
<br>
<p><p><span class="quotelev1">&gt; and by hosts you mean the compute nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>By hosts I mean whatever computers you want to run your MPI program on.
<br>
It can be the master only, the slave only, or both.
<br>
<p>The (excellent) OpenMPI FAQ may also help you:
<br>
<p><a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
<br>
<p>Many of your questions may have been answered there already.
<br>
I encourage you to read them, particularly the General Information,
<br>
Building, and Running Jobs ones.
<br>
<p><span class="quotelev1">&gt; Plez bear with me as this is the first time i am doin a project on Linux 
</span><br>
<span class="quotelev1">&gt; clustering.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Welcome, and good luck!
<br>
<p>Gus Correa
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
<p><span class="quotelev1">&gt; On Mon, Apr 6, 2009 at 9:27 PM, Gus Correa &lt;gus_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Hi Ankush
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     If I remember right,
</span><br>
<span class="quotelev1">&gt;     mpirun will put you on your home directory, not on /tmp,
</span><br>
<span class="quotelev1">&gt;     when it starts your ssh session.
</span><br>
<span class="quotelev1">&gt;     To run on /tmp (or on /mnt/nfs)
</span><br>
<span class="quotelev1">&gt;     you may need to use &quot;-path&quot; option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Likewise, you may want to give mpirun a list of hosts (-host option)
</span><br>
<span class="quotelev1">&gt;     or a hostfile (-hostfile option), to specify where you want the
</span><br>
<span class="quotelev1">&gt;     program to run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Do
</span><br>
<span class="quotelev1">&gt;     &quot;/full/path/to/openmpi/mpriun -help&quot;
</span><br>
<span class="quotelev1">&gt;     for details.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Make sure your NFS export/mount of /tmp is working,
</span><br>
<span class="quotelev1">&gt;     say, by doing:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     ssh slave_node 'hostname; ls /tmp; ls /mnt/nfs'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     or similar, and see if your  program &quot;pi&quot; is really there (and where).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Actually, it may be confusing to export /tmp, as it is part
</span><br>
<span class="quotelev1">&gt;     of the basic Linux directory tree,
</span><br>
<span class="quotelev1">&gt;     which is the reason why you mounted it on /mnt/nfs.
</span><br>
<span class="quotelev1">&gt;     You may want to choose to export/mount
</span><br>
<span class="quotelev1">&gt;     a directory that is not so generic as /tmp,
</span><br>
<span class="quotelev1">&gt;     so that you can use a consistent name on both computers.
</span><br>
<span class="quotelev1">&gt;     For instance, you can create a /my_export or /work directory
</span><br>
<span class="quotelev1">&gt;     (or whatever name you prefer) on the master node,
</span><br>
<span class="quotelev1">&gt;     export it to the slave node, mount it on the slave node
</span><br>
<span class="quotelev1">&gt;     with the same name/mountpoint, and use it for your MPI work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I hope this helps.
</span><br>
<span class="quotelev1">&gt;     Gus Correa
</span><br>
<span class="quotelev1">&gt;     ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     Gustavo Correa
</span><br>
<span class="quotelev1">&gt;     Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt;     Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt;     ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Ankush Kaul wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Thank you sir,
</span><br>
<span class="quotelev1">&gt;         one more thing i am confused about, suppose i have 2 run a 'pi'
</span><br>
<span class="quotelev1">&gt;         program using open mpi, where do i place the program?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         currently i have placed it in /tmp folder on de master node.
</span><br>
<span class="quotelev1">&gt;         this /tmp folder is mounted on /mnt/nfs of the compute node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         i run de progam from the tmp folder on de master node, is this
</span><br>
<span class="quotelev1">&gt;         correct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         i m a newbie n really need some help, thanks in advance
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         On Mon, Apr 6, 2009 at 8:43 PM, John Hearns
</span><br>
<span class="quotelev1">&gt;         &lt;hearnsj_at_[hidden] &lt;mailto:hearnsj_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:hearnsj_at_[hidden] &lt;mailto:hearnsj_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            2009/4/6 Ankush Kaul &lt;ankush.rkaul_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:ankush.rkaul_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;            &lt;mailto:ankush.rkaul_at_[hidden] &lt;mailto:ankush.rkaul_at_[hidden]&gt;&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;             &gt;&gt; Also how do i come to know that the program is using
</span><br>
<span class="quotelev1">&gt;         resources
</span><br>
<span class="quotelev1">&gt;            of both the
</span><br>
<span class="quotelev2">&gt;             &gt; nodes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Log into the second node before you start the program.
</span><br>
<span class="quotelev1">&gt;            Run 'top'
</span><br>
<span class="quotelev1">&gt;            Seriously - top is a very, very useful utility.
</span><br>
<span class="quotelev1">&gt;            _______________________________________________
</span><br>
<span class="quotelev1">&gt;            users mailing list
</span><br>
<span class="quotelev1">&gt;            users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8789.php">Gus Correa: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Previous message:</strong> <a href="8787.php">Steve Kargl: "[OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8785.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8800.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8800.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
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
