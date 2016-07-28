<?
$subject_val = "Re: [OMPI users] Setting up Open MPI to run on multiple servers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 05:23:21 2008" -->
<!-- isoreceived="20080812092321" -->
<!-- sent="Tue, 12 Aug 2008 11:23:16 +0200" -->
<!-- isosent="20080812092316" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting up Open MPI to run on multiple servers" -->
<!-- id="9b0da5ce0808120223g262ad199s18dad71720ef0bdf_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="330062.95240.qm_at_web76803.mail.sg1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Setting up Open MPI to run on multiple servers<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-12 05:23:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6313.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Previous message:</strong> <a href="6311.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>In reply to:</strong> <a href="6311.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6313.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6313.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What are the contents of your $PATH environment variable?
<br>
Make sure that your Open-MPI folder (/usr/lib/openmpi/1.2.5-gcc/bin)
<br>
precedes '/usr/bin' in $PATH,
<br>
i.e.
<br>
/usr/lib/openmpi/1.2.5-gcc/bin:/usr/bin
<br>
<p>then the Open-MPI version of mpirun or mpiexec will be used instead of
<br>
the LAM-versions.
<br>
<p>This should also be the case on your other machines.
<br>
<p>BTW, since it seems you haven't correctly set your PATH variable, i
<br>
suspect you have omitted
<br>
to set LD_LIBRARY_PATH as well...
<br>
see points 1,2 and 3 in
<br>
<a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
<br>
<p>Jody
<br>
<p>On Tue, Aug 12, 2008 at 11:10 AM, Rayne &lt;lancer6238_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I looked for any folders with 'lam', and found 2, under /usr/lib/lam and /etc/lam. I don't know if it means LAM was previously installed, because my PC also has /usr/lib/lam, although the contents are different. I renamed the 2 folders, and got the &quot;*** Oops -- I cannot open the LAM help file.&quot; error below instead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried 'whichexec', and it gave me /usr/bin/mpiexec. I checked the mpiexec there and it's actually a Perl script, and I believe I installed OpenMPI in /usr/lib64/openmpi/1.2.5-gcc/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I tried mpirun instead and it gave me the following message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;*** Oops -- I cannot open the LAM help file.
</span><br>
<span class="quotelev1">&gt; *** I tried looking for it in the following places:
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; ***   $HOME/lam-helpfile
</span><br>
<span class="quotelev1">&gt; ***   $HOME/lam-7.0.6-helpfile
</span><br>
<span class="quotelev1">&gt; ***   $HOME/etc/lam-helpfile
</span><br>
<span class="quotelev1">&gt; ***   $HOME/etc/lam- 7.0.6-helpfile
</span><br>
<span class="quotelev1">&gt; ***   $LAMHELPDIR/lam-helpfile
</span><br>
<span class="quotelev1">&gt; ***   $LAMHELPDIR/lam-7.0.6-helpfile
</span><br>
<span class="quotelev1">&gt; ***   $LAMHOME/etc/lam-helpfile
</span><br>
<span class="quotelev1">&gt; ***   $LAMHOME/etc/lam-7.0.6-helpfile
</span><br>
<span class="quotelev1">&gt; ***   $SYSCONFDIR/lam-helpfile
</span><br>
<span class="quotelev1">&gt; ***   $SYSCONFDIR/lam- 7.0.6-helpfile
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; *** You were supposed to get help on the program &quot;MPI&quot;
</span><br>
<span class="quotelev1">&gt; *** about the topic &quot;no-lamd&quot;
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; *** Sorry!&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Firstly, how do I change the settings such that mpiexec points to the mpiexec in my installation folder, which I believe should be
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/1.2.5-gcc/bin/mpiexec, and the mpiexec there seems to be a shortcut that points to /usr/lib/openmpi/1.2.5-gcc/bin/orterun. Would this help? While I'm at it, it seems that mpirun, which is /usr/bin/mpirun currently, should also point to /usr/lib/openmpi/1.2.5-gcc/bin/mpirun, which also is a shortcut to /usr/lib/openmpi/1.2.5-gcc/bin/orterun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Rayne
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Tue, 12/8/08, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: jody &lt;jody.xha_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Setting up Open MPI to run on multiple servers
</span><br>
<span class="quotelev2">&gt;&gt; To: lancer6238_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tuesday, 12 August, 2008, 3:38 PM
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ryan
</span><br>
<span class="quotelev2">&gt;&gt; Another thing:
</span><br>
<span class="quotelev2">&gt;&gt; Have you checked if the mpiexec you call is really the one
</span><br>
<span class="quotelev2">&gt;&gt; from your
</span><br>
<span class="quotelev2">&gt;&gt; Open-MPI installation?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try 'which mpiexec' to find out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Aug 12, 2008 at 9:36 AM, jody
</span><br>
<span class="quotelev2">&gt;&gt; &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi Ryan
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The message &quot;Lamnodes Failed!&quot; seems to
</span><br>
<span class="quotelev2">&gt;&gt; indicate that you still have a
</span><br>
<span class="quotelev3">&gt;&gt; &gt; LAM/MPI installation somewhere.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; You should get rid of that first.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Jody
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Tue, Aug 12, 2008 at 9:00 AM, Rayne
</span><br>
<span class="quotelev2">&gt;&gt; &lt;lancer6238_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hi, thanks for your reply.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I did what you said, set up the password-less ssh,
</span><br>
<span class="quotelev2">&gt;&gt; nfs etc, and put the IP address of the server in the default
</span><br>
<span class="quotelev2">&gt;&gt; hostfile (in my PC only, the default hostfile in the server
</span><br>
<span class="quotelev2">&gt;&gt; does not contain any IP addresses). Then I installed Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI in the server under the same directory as my PC, e.g.
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/openmpi/1.2.5-gcc/
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; All my MPI programs and executables, e.g. a.out
</span><br>
<span class="quotelev2">&gt;&gt; are in the shared folder. However, I have trouble running
</span><br>
<span class="quotelev2">&gt;&gt; the MPI programs.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; After compiling my MPI program on my PC, I tried
</span><br>
<span class="quotelev2">&gt;&gt; to run it via &quot;mpiexec -n 2 ./a.out&quot;. However, I
</span><br>
<span class="quotelev2">&gt;&gt; get the error message
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &quot;Failed to find or execute the following
</span><br>
<span class="quotelev2">&gt;&gt; executable:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Host: (the name of the server)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Executable: ./a.out
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Cannot continue&quot;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Then when I tried to run the MPI program on my
</span><br>
<span class="quotelev2">&gt;&gt; server after compiling, I get the error:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &quot;Lamnodes Failed!
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Check if you had booted lam before calling mpiexec
</span><br>
<span class="quotelev2">&gt;&gt; else use -machinefile to pass host file to mpiexec&quot;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I'm guessing that because the server cannot
</span><br>
<span class="quotelev2">&gt;&gt; run the MPI program, I can't run the program on my PC as
</span><br>
<span class="quotelev2">&gt;&gt; well. Is there some other configurations I missed when using
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI on my server?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Thank you.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Rayne
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Yahoo! Toolbar is now powered with Search Assist.Download it now!
</span><br>
<span class="quotelev1">&gt; <a href="http://sg.toolbar.yahoo.com/">http://sg.toolbar.yahoo.com/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6313.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Previous message:</strong> <a href="6311.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>In reply to:</strong> <a href="6311.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6313.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6313.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
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
