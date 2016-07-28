<?
$subject_val = "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 08:11:39 2008" -->
<!-- isoreceived="20080422121139" -->
<!-- sent="Tue, 22 Apr 2008 13:11:34 +0100" -->
<!-- isosent="20080422121134" -->
<!-- name="Simon Hammond" -->
<!-- email="simon.hammond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found" -->
<!-- id="45ae3b650804220511u3bf35aadqd6ad0df30476d448_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="67981B22-576A-4611-9BCB-253C462A3B1B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found<br>
<strong>From:</strong> Simon Hammond (<em>simon.hammond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-22 08:11:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5440.php">koppole_at_[hidden]: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>Previous message:</strong> <a href="5438.php">Jeff Squyres: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>In reply to:</strong> <a href="5437.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution with OpenMPI:	Orted: command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5443.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<li><strong>Reply:</strong> <a href="5443.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Have you checked the .bashrc or /etc/bash.bashrc file on the machine. We
<br>
have seen this problem before on both Debian and Ubuntu systems. If you find
<br>
the following line:
<br>
<p># If not running interactively, don't do anything
<br>
[ -z &quot;$PS1&quot; ] &amp;&amp; return
<br>
<p>It means that the remainder of the file is not processed (which may include
<br>
setting up your PATH/LD_LIBRARY_PATH) if you are connecting via a
<br>
non-interactive login. Since this command only works for non-interactive
<br>
logins the user falsely gets the idea that the PATH/LD_LIBRARY_PATH when
<br>
they log in over SSH.
<br>
<p>We commented this line out and it worked for us, so just an idea.
<br>
<p><p><p>Si Hammond
<br>
<p>Performance Modelling and Analysis Team,
<br>
Department of Computer Science,
<br>
University of Warwick, UK
<br>
<p><p>On 22/04/2008, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sure you're using the &quot;right&quot; mpirun.  If you have both MPICH and
</span><br>
<span class="quotelev1">&gt; Open MPI installed, you need to install them into the different
</span><br>
<span class="quotelev1">&gt; directories.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for not finding the &quot;orted&quot; on the remote nodes, it simply means
</span><br>
<span class="quotelev1">&gt; that your PATH / LD_LIBRARY_PATH is not set properly on the remote
</span><br>
<span class="quotelev1">&gt; nodes.  See:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-prefix">http://www.open-mpi.org/faq/?category=running#mpirun-prefix</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A few notes about your command line syntax:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - &quot;-np X&quot; specifies how many processes to launch (where X is an
</span><br>
<span class="quotelev1">&gt; integer).  If you don't specify this, OMPI defaults to as many slots
</span><br>
<span class="quotelev1">&gt; are defined in your hostfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mpirun -np 4 ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - &quot;--host LIST&quot;, where LIST is a comma-delimited list of hostnames to
</span><br>
<span class="quotelev1">&gt; launch on (*instead* of specifying a hostfile).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mpirun --host host1,host2,host3,host4 ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - &quot;--hostfile FILENAME&quot;, where FILENAME is a list of a hostfile as
</span><br>
<span class="quotelev1">&gt; described in the FAQ.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mpirun --hostfile my_hostfile.txt ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can't mix and match these params, like your example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mpirun --host -np 2 node0,node1 /bin/hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 22, 2008, at 4:40 AM, gildo.rex_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jodi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thanks for the quick answer!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Have you tried the command ompi_info?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What is its output?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; No, I haven't. I can try this evening, when I'm back home from work.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Furthermore, the command you gave
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  mpirun -np 2 --hostfile /home/stephan/mpd.hosts
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is incomplete. There is no executable.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sorry, it should correctly be
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 --hostfile /home/stephan/mpd.hosts /bin/hostname
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The output shows, that the program is only executed on the local
</span><br>
<span class="quotelev2">&gt; &gt; machine. This is the same on each of the machines.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Try to make sure wether your host file has the correct
</span><br>
<span class="quotelev3">&gt; &gt;&gt; format. If i remember correctly  Open-MPI does not use
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the same format for hostfiles as MPICH.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes, thats true according to the documentation. There is a
</span><br>
<span class="quotelev2">&gt; &gt; possibility to define the number of slots and the max-number of
</span><br>
<span class="quotelev2">&gt; &gt; slots in OpenMPI, which I haven't seen in MPICH so far (at least not
</span><br>
<span class="quotelev2">&gt; &gt; within the hostfile).
</span><br>
<span class="quotelev2">&gt; &gt; But when I use a hostfile without a specification regarding the
</span><br>
<span class="quotelev2">&gt; &gt; slots, e.g.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; shell$ cat my-hosts
</span><br>
<span class="quotelev2">&gt; &gt; node0
</span><br>
<span class="quotelev2">&gt; &gt; node1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (which is the same as in MPICH), it should interpret the default
</span><br>
<span class="quotelev2">&gt; &gt; values, i.e. slots=1 and max_slots=unlimited). That should work for
</span><br>
<span class="quotelev2">&gt; &gt; that simple test.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; See the FAQ for more info
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I also tried the way to specify the hosts in the command, e.g.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --host -np 2 node0,node1 /bin/hostname
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; but the result is the same. The program runs only on one host.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If you don't use a hostfile, mpirun will start
</span><br>
<span class="quotelev3">&gt; &gt;&gt; all processes on the local machine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes, that's what it obviously does. It doesn't recognise the cluster
</span><br>
<span class="quotelev2">&gt; &gt; partner in each direction...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kind Regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Stephan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Tue, Apr 22, 2008 at 8:56 AM,  &lt;gildo.rex_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I wanted to compare MPICH and OpenMPI. MPICH works fine. So I
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; installed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OpenMPI the same way (configure, make, make install). The commands
</span><br>
<span class="quotelev3">&gt; &gt;&gt; are
</span><br>
<span class="quotelev3">&gt; &gt;&gt; found in the OpenMPI installation directory.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; When I tried to run programs I was a little bit confused, that there
</span><br>
<span class="quotelev3">&gt; &gt;&gt; seems not to be a default hosts-file like in MPICH. I included it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; command with &quot;--hostfile&quot;.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; When I now want to run my first test with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  mpirun -np 2 --hostfile /home/stephan/mpd.hosts
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I get the error-message:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  orted: command not found
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The &quot;orted&quot;-executable resides as well as the &quot;mpirun&quot;- and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;mpiexec&quot;-executables in the directory /home/stephan/openmpi-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; install. &quot;orted&quot; is also
</span><br>
<span class="quotelev3">&gt; &gt;&gt; found by &quot;which orted&quot;.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; What might be the problem? How does &quot;orted&quot; work? I'm not conscious
</span><br>
<span class="quotelev3">&gt; &gt;&gt; about anything equivalent in MPICH...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks in advance for your help!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Kind Regards
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Stephan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Psssst! Schon vom neuen GMX MultiMessenger geh&#246;rt?
</span><br>
<span class="quotelev2">&gt; &gt; Der kann`s mit allen: <a href="http://www.gmx.net/de/go/multimessenger">http://www.gmx.net/de/go/multimessenger</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5439/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5440.php">koppole_at_[hidden]: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>Previous message:</strong> <a href="5438.php">Jeff Squyres: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>In reply to:</strong> <a href="5437.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution with OpenMPI:	Orted: command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5443.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<li><strong>Reply:</strong> <a href="5443.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
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
