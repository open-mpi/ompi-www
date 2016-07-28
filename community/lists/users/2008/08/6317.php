<?
$subject_val = "Re: [OMPI users] Setting up Open MPI to run on multiple servers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 12:38:43 2008" -->
<!-- isoreceived="20080812163843" -->
<!-- sent="Tue, 12 Aug 2008 12:38:33 -0400" -->
<!-- isosent="20080812163833" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting up Open MPI to run on multiple servers" -->
<!-- id="48A1BC89.5060308_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990808120341t69d6e74eme8c42a0594eb1b02_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-12 12:38:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6318.php">Mohd Radzi Nurul Azri: "[OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>Previous message:</strong> <a href="6316.php">Tom Riddle: "[OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>In reply to:</strong> <a href="6315.php">Lenny Verkhovsky: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6325.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6325.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rayne Lance and list
<br>
<p>I second Lenny's suggestion.
<br>
The easiest way to get started is to use full paths to mpiexec when you 
<br>
run your program,
<br>
and to the mpi compiler wrappers (mpicc, etc) when you compile it.
<br>
If you don't use the mpi compiler wrappers, make sure your Makefile 
<br>
points to the
<br>
correct MPI libraries and include files (use full paths again).
<br>
<p>Linux distributions, commercial compilers, software packages, often come 
<br>
with
<br>
their own MPI libraries, which are often installed in places that have 
<br>
high precedence on your path.
<br>
This can produce very confusing effects at compile and at run time, and 
<br>
all sorts of mixup
<br>
(e.g. inadvertently running with LAM mpirun a program that was
<br>
also inadvertently compiled with  mpicc from mpich2).
<br>
<p>There are other ways to solve this problem (e.g. environment modules 
<br>
package,
<br>
fiddling with your .bashrc/.cshrc file, etc).
<br>
However, to get started, using full paths is perfectly acceptable
<br>
and gives the most pleasure with the least suffering.
<br>
<p>On the long term, you may consider installing a batch job and resource 
<br>
manager package.
<br>
I use Torque/PBS, which is free, great, and easily available (e.g. 
<br>
through yum).
<br>
It may well be already installed on your computers.
<br>
Check it out with  &quot;which  pbs_server&quot;  or &quot;locate torque&quot;.
<br>
You can compile your OpenMPI with Torque/PBS support, and thereafter use 
<br>
Torque/PBS submit your jobs.
<br>
Torque will take care of which processors/nodes are available (no 
<br>
hostfile required),
<br>
send the jobs to the correct ones, queue up as many jobs as you want, 
<br>
etc, etc.
<br>
You can comfortably monitor your jobs through a fancy pair of GUIs 
<br>
(xpbs, xpbsmon).
<br>
Torque/PBS makes life much easier, after simple configuration and a 
<br>
short learning curve.
<br>
It is well documented, and has active support from Cluster Resources, 
<br>
and a mailing list for extra help.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><pre>
-- 
---------------------------------------------------------------------
Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
Lamont-Doherty Earth Observatory - Columbia University
P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
---------------------------------------------------------------------
Lenny Verkhovsky wrote:
&gt; you can also provide a full path to your mpi
&gt;
&gt; #/usr/lib/openmpi/1.2.5-gcc/bin/mpiexec -n 2 ./a.out
&gt;
&gt; On 8/12/08, *jody* &lt;jody.xha_at_[hidden] &lt;mailto:jody.xha_at_[hidden]&gt;&gt; 
&gt; wrote:
&gt;
&gt;     No.
&gt;     The PATH variable simply tells the system in which order the
&gt;     directories should be searched for executables.
&gt;
&gt;     so in .bash_profile just add the line
&gt;       PATH=/usr/lib/openmpi/1.2.5-gcc/bin:$PATH
&gt;     after the line
&gt;       PATH=$PATH:$HOME/bin
&gt;
&gt;     Then the system will search in /usr/lib/openmpi/1.2.5-gcc/bin before
&gt;     it will look
&gt;     in the directories it would have looked in anyway.
&gt;
&gt;
&gt;
&gt;     Jody
&gt;
&gt;
&gt;     On Tue, Aug 12, 2008 at 11:59 AM, Rayne &lt;lancer6238_at_[hidden]
&gt;     &lt;mailto:lancer6238_at_[hidden]&gt;&gt; wrote:
&gt;     &gt; My .bash_profile and .bashrc on the server are exactly the same
&gt;     as that on my PC. However, I can run mpiexec without any problems
&gt;     just using my PC as a single node, i.e. without trying to login to
&gt;     other servers and using multiple nodes. I only get the errors on
&gt;     the server.
&gt;     &gt;
&gt;     &gt; In .bash_profile, I see
&gt;     &gt;
&gt;     &gt; PATH=$PATH:$HOME/bin
&gt;     &gt;
&gt;     &gt; If I change this, won't it affect other programs as well?
&gt;     &gt;
&gt;     &gt; Thank you.
&gt;     &gt;
&gt;     &gt; Regards,
&gt;     &gt; Rayne
&gt;     &gt;
&gt;     &gt; --- On Tue, 12/8/08, jody &lt;jody.xha_at_[hidden]
&gt;     &lt;mailto:jody.xha_at_[hidden]&gt;&gt; wrote:
&gt;     &gt;
&gt;     &gt;&gt; From: jody &lt;jody.xha_at_[hidden] &lt;mailto:jody.xha_at_[hidden]&gt;&gt;
&gt;     &gt;&gt; Subject: Re: [OMPI users] Setting up Open MPI to run on
&gt;     multiple servers
&gt;     &gt;&gt; To: lancer6238_at_[hidden] &lt;mailto:lancer6238_at_[hidden]&gt;, &quot;Open
&gt;     MPI Users&quot; &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
&gt;     &gt;&gt; Date: Tuesday, 12 August, 2008, 5:23 PM
&gt;     &gt;&gt; What are the contents of your $PATH environment variable?
&gt;     &gt;&gt; Make sure that your Open-MPI folder
&gt;     &gt;&gt; (/usr/lib/openmpi/1.2.5-gcc/bin)
&gt;     &gt;&gt; precedes '/usr/bin' in $PATH,
&gt;     &gt;&gt; i.e.
&gt;     &gt;&gt; /usr/lib/openmpi/1.2.5-gcc/bin:/usr/bin
&gt;     &gt;&gt;
&gt;     &gt;&gt; then the Open-MPI version of mpirun or mpiexec will be used
&gt;     &gt;&gt; instead of
&gt;     &gt;&gt; the LAM-versions.
&gt;     &gt;&gt;
&gt;     &gt;&gt; This should also be the case on your other machines.
&gt;     &gt;&gt;
&gt;     &gt;&gt; BTW, since it seems you haven't correctly set your PATH
&gt;     &gt;&gt; variable, i
&gt;     &gt;&gt; suspect you have omitted
&gt;     &gt;&gt; to set LD_LIBRARY_PATH as well...
&gt;     &gt;&gt; see points 1,2 and 3 in
&gt;     &gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
&gt;     &gt;&gt;
&gt;     &gt;&gt; Jody
&gt;     &gt;&gt;
&gt;     &gt;&gt; On Tue, Aug 12, 2008 at 11:10 AM, Rayne
&gt;     &gt;&gt; &lt;lancer6238_at_[hidden] &lt;mailto:lancer6238_at_[hidden]&gt;&gt; wrote:
&gt;     &gt;&gt; &gt; Hi,
&gt;     &gt;&gt; &gt;
&gt;     &gt;&gt; &gt; I looked for any folders with 'lam', and found
&gt;     &gt;&gt; 2, under /usr/lib/lam and /etc/lam. I don't know if it
&gt;     &gt;&gt; means LAM was previously installed, because my PC also has
&gt;     &gt;&gt; /usr/lib/lam, although the contents are different. I renamed
&gt;     &gt;&gt; the 2 folders, and got the &quot;*** Oops -- I cannot open
&gt;     &gt;&gt; the LAM help file.&quot; error below instead.
&gt;     &gt;&gt; &gt;
&gt;     &gt;&gt; &gt; I tried 'whichexec', and it gave me
&gt;     &gt;&gt; /usr/bin/mpiexec. I checked the mpiexec there and it's
&gt;     &gt;&gt; actually a Perl script, and I believe I installed OpenMPI in
&gt;     &gt;&gt; /usr/lib64/openmpi/1.2.5-gcc/
&gt;     &gt;&gt; &gt;
&gt;     &gt;&gt; &gt; So I tried mpirun instead and it gave me the following
&gt;     &gt;&gt; message:
&gt;     &gt;&gt; &gt;
&gt;     &gt;&gt; &gt; &quot;*** Oops -- I cannot open the LAM help file.
&gt;     &gt;&gt; &gt; *** I tried looking for it in the following places:
&gt;     &gt;&gt; &gt; ***
&gt;     &gt;&gt; &gt; ***   $HOME/lam-helpfile
&gt;     &gt;&gt; &gt; ***   $HOME/lam-7.0.6-helpfile
&gt;     &gt;&gt; &gt; ***   $HOME/etc/lam-helpfile
&gt;     &gt;&gt; &gt; ***   $HOME/etc/lam- 7.0.6-helpfile
&gt;     &gt;&gt; &gt; ***   $LAMHELPDIR/lam-helpfile
&gt;     &gt;&gt; &gt; ***   $LAMHELPDIR/lam-7.0.6-helpfile
&gt;     &gt;&gt; &gt; ***   $LAMHOME/etc/lam-helpfile
&gt;     &gt;&gt; &gt; ***   $LAMHOME/etc/lam-7.0.6-helpfile
&gt;     &gt;&gt; &gt; ***   $SYSCONFDIR/lam-helpfile
&gt;     &gt;&gt; &gt; ***   $SYSCONFDIR/lam- 7.0.6-helpfile
&gt;     &gt;&gt; &gt; ***
&gt;     &gt;&gt; &gt; *** You were supposed to get help on the program
&gt;     &gt;&gt; &quot;MPI&quot;
&gt;     &gt;&gt; &gt; *** about the topic &quot;no-lamd&quot;
&gt;     &gt;&gt; &gt; ***
&gt;     &gt;&gt; &gt; *** Sorry!&quot;
&gt;     &gt;&gt; &gt;
&gt;     &gt;&gt; &gt; Firstly, how do I change the settings such that
&gt;     &gt;&gt; mpiexec points to the mpiexec in my installation folder,
&gt;     &gt;&gt; which I believe should be
&gt;     &gt;&gt; &gt; /usr/lib/openmpi/1.2.5-gcc/bin/mpiexec, and the
&gt;     &gt;&gt; mpiexec there seems to be a shortcut that points to
&gt;     &gt;&gt; /usr/lib/openmpi/1.2.5-gcc/bin/orterun. Would this help?
&gt;     &gt;&gt; While I'm at it, it seems that mpirun, which is
&gt;     &gt;&gt; /usr/bin/mpirun currently, should also point to
&gt;     &gt;&gt; /usr/lib/openmpi/1.2.5-gcc/bin/mpirun, which also is a
&gt;     &gt;&gt; shortcut to /usr/lib/openmpi/1.2.5-gcc/bin/orterun.
&gt;     &gt;&gt; &gt;
&gt;     &gt;&gt; &gt; Thank you.
&gt;     &gt;&gt; &gt;
&gt;     &gt;&gt; &gt; Regards,
&gt;     &gt;&gt; &gt; Rayne
&gt;     &gt;&gt; &gt;
&gt;     &gt;&gt; &gt; --- On Tue, 12/8/08, jody &lt;jody.xha_at_[hidden]
&gt;     &lt;mailto:jody.xha_at_[hidden]&gt;&gt;
&gt;     &gt;&gt; wrote:
&gt;     &gt;&gt; &gt;
&gt;     &gt;&gt; &gt;&gt; From: jody &lt;jody.xha_at_[hidden] &lt;mailto:jody.xha_at_[hidden]&gt;&gt;
&gt;     &gt;&gt; &gt;&gt; Subject: Re: [OMPI users] Setting up Open MPI to
&gt;     &gt;&gt; run on multiple servers
&gt;     &gt;&gt; &gt;&gt; To: lancer6238_at_[hidden] &lt;mailto:lancer6238_at_[hidden]&gt;,
&gt;     &quot;Open MPI
&gt;     &gt;&gt; Users&quot; &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
&gt;     &gt;&gt; &gt;&gt; Date: Tuesday, 12 August, 2008, 3:38 PM
&gt;     &gt;&gt; &gt;&gt; Hi Ryan
&gt;     &gt;&gt; &gt;&gt; Another thing:
&gt;     &gt;&gt; &gt;&gt; Have you checked if the mpiexec you call is really
&gt;     &gt;&gt; the one
&gt;     &gt;&gt; &gt;&gt; from your
&gt;     &gt;&gt; &gt;&gt; Open-MPI installation?
&gt;     &gt;&gt; &gt;&gt;
&gt;     &gt;&gt; &gt;&gt; Try 'which mpiexec' to find out.
&gt;     &gt;&gt; &gt;&gt;
&gt;     &gt;&gt; &gt;&gt; Jody
&gt;     &gt;&gt; &gt;&gt;
&gt;     &gt;&gt; &gt;&gt; On Tue, Aug 12, 2008 at 9:36 AM, jody
&gt;     &gt;&gt; &gt;&gt; &lt;jody.xha_at_[hidden] &lt;mailto:jody.xha_at_[hidden]&gt;&gt; wrote:
&gt;     &gt;&gt; &gt;&gt; &gt; Hi Ryan
&gt;     &gt;&gt; &gt;&gt; &gt;
&gt;     &gt;&gt; &gt;&gt; &gt; The message &quot;Lamnodes Failed!&quot;
&gt;     &gt;&gt; seems to
&gt;     &gt;&gt; &gt;&gt; indicate that you still have a
&gt;     &gt;&gt; &gt;&gt; &gt; LAM/MPI installation somewhere.
&gt;     &gt;&gt; &gt;&gt; &gt; You should get rid of that first.
&gt;     &gt;&gt; &gt;&gt; &gt;
&gt;     &gt;&gt; &gt;&gt; &gt; Jody
&gt;     &gt;&gt; &gt;&gt; &gt;
&gt;     &gt;&gt; &gt;&gt; &gt; On Tue, Aug 12, 2008 at 9:00 AM, Rayne
&gt;     &gt;&gt; &gt;&gt; &lt;lancer6238_at_[hidden] &lt;mailto:lancer6238_at_[hidden]&gt;&gt; wrote:
&gt;     &gt;&gt; &gt;&gt; &gt;&gt; Hi, thanks for your reply.
&gt;     &gt;&gt; &gt;&gt; &gt;&gt;
&gt;     &gt;&gt; &gt;&gt; &gt;&gt; I did what you said, set up the
&gt;     &gt;&gt; password-less ssh,
&gt;     &gt;&gt; &gt;&gt; nfs etc, and put the IP address of the server in
&gt;     &gt;&gt; the default
&gt;     &gt;&gt; &gt;&gt; hostfile (in my PC only, the default hostfile in
&gt;     &gt;&gt; the server
&gt;     &gt;&gt; &gt;&gt; does not contain any IP addresses). Then I
&gt;     &gt;&gt; installed Open
&gt;     &gt;&gt; &gt;&gt; MPI in the server under the same directory as my
&gt;     &gt;&gt; PC, e.g.
&gt;     &gt;&gt; &gt;&gt; /usr/lib/openmpi/1.2.5-gcc/
&gt;     &gt;&gt; &gt;&gt; &gt;&gt; All my MPI programs and executables, e.g.
&gt;     &gt;&gt; a.out
&gt;     &gt;&gt; &gt;&gt; are in the shared folder. However, I have trouble
&gt;     &gt;&gt; running
&gt;     &gt;&gt; &gt;&gt; the MPI programs.
&gt;     &gt;&gt; &gt;&gt; &gt;&gt;
&gt;     &gt;&gt; &gt;&gt; &gt;&gt; After compiling my MPI program on my PC,
&gt;     &gt;&gt; I tried
&gt;     &gt;&gt; &gt;&gt; to run it via &quot;mpiexec -n 2 ./a.out&quot;.
&gt;     &gt;&gt; However, I
&gt;     &gt;&gt; &gt;&gt; get the error message
&gt;     &gt;&gt; &gt;&gt; &gt;&gt;
&gt;     &gt;&gt; &gt;&gt; &gt;&gt; &quot;Failed to find or execute the
&gt;     &gt;&gt; following
&gt;     &gt;&gt; &gt;&gt; executable:
&gt;     &gt;&gt; &gt;&gt; &gt;&gt; Host: (the name of the server)
&gt;     &gt;&gt; &gt;&gt; &gt;&gt; Executable: ./a.out
&gt;     &gt;&gt; &gt;&gt; &gt;&gt;
&gt;     &gt;&gt; &gt;&gt; &gt;&gt; Cannot continue&quot;
&gt;     &gt;&gt; &gt;&gt; &gt;&gt;
&gt;     &gt;&gt; &gt;&gt; &gt;&gt; Then when I tried to run the MPI program
&gt;     &gt;&gt; on my
&gt;     &gt;&gt; &gt;&gt; server after compiling, I get the error:
&gt;     &gt;&gt; &gt;&gt; &gt;&gt;
&gt;     &gt;&gt; &gt;&gt; &gt;&gt; &quot;Lamnodes Failed!
&gt;     &gt;&gt; &gt;&gt; &gt;&gt; Check if you had booted lam before
&gt;     &gt;&gt; calling mpiexec
&gt;     &gt;&gt; &gt;&gt; else use -machinefile to pass host file to
&gt;     &gt;&gt; mpiexec&quot;
&gt;     &gt;&gt; &gt;&gt; &gt;&gt;
&gt;     &gt;&gt; &gt;&gt; &gt;&gt; I'm guessing that because the server
&gt;     &gt;&gt; cannot
&gt;     &gt;&gt; &gt;&gt; run the MPI program, I can't run the program
&gt;     &gt;&gt; on my PC as
&gt;     &gt;&gt; &gt;&gt; well. Is there some other configurations I missed
&gt;     &gt;&gt; when using
&gt;     &gt;&gt; &gt;&gt; Open MPI on my server?
&gt;     &gt;&gt; &gt;&gt; &gt;&gt;
&gt;     &gt;&gt; &gt;&gt; &gt;&gt; Thank you.
&gt;     &gt;&gt; &gt;&gt; &gt;&gt;
&gt;     &gt;&gt; &gt;&gt; &gt;&gt; Regards,
&gt;     &gt;&gt; &gt;&gt; &gt;&gt; Rayne
&gt;     &gt;&gt; &gt;
&gt;     &gt;&gt; &gt;
&gt;     &gt;&gt; &gt;      Yahoo! Toolbar is now powered with Search
&gt;     &gt;&gt; Assist.Download it now!
&gt;     &gt;&gt; &gt; <a href="http://sg.toolbar.yahoo.com/">http://sg.toolbar.yahoo.com/</a>
&gt;     &gt;&gt; &gt;
&gt;     &gt;&gt; &gt; _______________________________________________
&gt;     &gt;&gt; &gt; users mailing list
&gt;     &gt;&gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;     &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;     &gt;&gt; &gt;
&gt;     &gt;
&gt;     &gt;
&gt;     &gt;      New Email names for you!
&gt;     &gt; Get the Email name you've always wanted on the new @ymail and
&gt;     @rocketmail.
&gt;     &gt; Hurry before someone else does!
&gt;     &gt; <a href="http://mail.promotions.yahoo.com/newdomains/sg/">http://mail.promotions.yahoo.com/newdomains/sg/</a>
&gt;     &gt;
&gt;     &gt; _______________________________________________
&gt;     &gt; users mailing list
&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;     &gt;
&gt;     _______________________________________________
&gt;     users mailing list
&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt;------------------------------------------------------------------------
&gt;
&gt;_______________________________________________
&gt;users mailing list
&gt;users_at_[hidden]
&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6318.php">Mohd Radzi Nurul Azri: "[OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>Previous message:</strong> <a href="6316.php">Tom Riddle: "[OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>In reply to:</strong> <a href="6315.php">Lenny Verkhovsky: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6325.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6325.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
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
