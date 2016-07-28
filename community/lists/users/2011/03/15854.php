<?
$subject_val = "Re: [OMPI users] Number of processes and spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 14 14:21:40 2011" -->
<!-- isoreceived="20110314182140" -->
<!-- sent="Mon, 14 Mar 2011 19:21:34 +0100" -->
<!-- isosent="20110314182134" -->
<!-- name="Federico Golfr&#232; Andreasi" -->
<!-- email="federico.golfre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Number of processes and spawn" -->
<!-- id="AANLkTi=mMtVF6vkBQUbkcFFeJnhjZwBjYPe20gu3uT3u_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3C2B55B3-C717-47E4-9F96-6FD50B23E6D4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Number of processes and spawn<br>
<strong>From:</strong> Federico Golfr&#232; Andreasi (<em>federico.golfre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-14 14:21:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15855.php">David Robertson: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>Previous message:</strong> <a href="15853.php">Shamis, Pavel: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>In reply to:</strong> <a href="15841.php">Jeff Squyres: "Re: [OMPI users] Number of processes and spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15856.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Reply:</strong> <a href="15856.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Jeff,
<br>
<p>my fault :( I didn't find that a link of that file was also mentioned in the
<br>
website page.
<br>
I was able to build from the trunk the revision 24472.
<br>
But when I try to run my program I still receive the error that Ralph told
<br>
me is dued to version mismacth.
<br>
<p>How can I check which openmpi version my program is running in the remore
<br>
shell ?
<br>
<p>I execute my programs using the command
<br>
/home/fandreasi/openmpi-trunk/bin/mpiexec -hostfile ./hostfile -n 12
<br>
./my_bin
<br>
And in my .cshrc I've the instruction:
<br>
setenv LD_LIBRARY_PATH /home/fandreasi/openmpi-trunk/lib:
<br>
/home/fandreasi/openmpi-trunk/lib/openmpi
<br>
<p>thank you again !
<br>
Federico
<br>
<p><p><p><p><p>2011/3/10 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; This usually means you didn't install the GNU auto tools properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check the HACKING file in the top-level directory for specific instructions
</span><br>
<span class="quotelev1">&gt; on how to install the Autotools.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 10, 2011, at 7:50 AM, Federico Golfr&#232; Andreasi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I did a chekout of the 22794 revision with svn.
</span><br>
<span class="quotelev2">&gt; &gt; I've download and installed (with the default configuration) in my /home
</span><br>
<span class="quotelev1">&gt; folder:
</span><br>
<span class="quotelev2">&gt; &gt; - m4 version 1.4.16
</span><br>
<span class="quotelev2">&gt; &gt; - autoconf version 2.68
</span><br>
<span class="quotelev2">&gt; &gt; - automake version 1.11
</span><br>
<span class="quotelev2">&gt; &gt; - libtool version 2.2.6b
</span><br>
<span class="quotelev2">&gt; &gt; I've modifyed my CSHRC to export the following:
</span><br>
<span class="quotelev2">&gt; &gt; setenv PATH
</span><br>
<span class="quotelev1">&gt; /home/fandreasi/m4-1.4.16/bin:/home/fandreasi/autoconf-2.68/bin:/home/fandreasi/automake-1.11/bin:/home/fandreasi/libtool-2.2.6b/bin:$PATH
</span><br>
<span class="quotelev2">&gt; &gt; setenv LD_LIBRARY_PATH /home/fandreasi/libtool-2.2.6b/lib
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I do the autogen it return me the error I've attached.
</span><br>
<span class="quotelev2">&gt; &gt; Can you help me on this ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you,
</span><br>
<span class="quotelev2">&gt; &gt; Federico.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Il giorno 05 marzo 2011 19:05, Ralph Castain &lt;rhc_at_[hidden]&gt; ha
</span><br>
<span class="quotelev1">&gt; scritto:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Federico
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tested the trunk today and it works fine for me - I let it spin for
</span><br>
<span class="quotelev1">&gt; 1000 cycles without issue. My test program is essentially identical to what
</span><br>
<span class="quotelev1">&gt; you describe - you can see it in the orte/test/mpi directory. The &quot;master&quot;
</span><br>
<span class="quotelev1">&gt; is loop_spawn.c, and the &quot;slave&quot; is loop_child.c. I only tested it on a
</span><br>
<span class="quotelev1">&gt; single machine, though - will have to test multi-machine later. You might
</span><br>
<span class="quotelev1">&gt; see if that makes a difference.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The error you report in your attachment is a classic symptom of
</span><br>
<span class="quotelev1">&gt; mismatched versions. Remember, we don't forward your ld_lib_path, so it has
</span><br>
<span class="quotelev1">&gt; to be correct on your remote machine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As for r22794 - we don't keep anything that old on our web site. If you
</span><br>
<span class="quotelev1">&gt; want to build it, the best way to get the code is to do a subversion
</span><br>
<span class="quotelev1">&gt; checkout of the developer's trunk at that revision level:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; svn co -r 22794 <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Remember to run autogen before configure.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 4, 2011, at 4:43 AM, Federico Golfr&#232; Andreasi wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm getting stuck with spawning stuff,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've downloaded the snapshot from the trunk of 1st of March
</span><br>
<span class="quotelev1">&gt; (openmpi-1.7a1r24472.tar.bz2),
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm testing using a small program that does the following:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  - master program starts and each rank prints his hostsname
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  - master program spawn a slave program with the same size
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  - each rank of the slave (spawned) program prints his hostname
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  - end
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Not always he is able to complete the progam run, two different
</span><br>
<span class="quotelev1">&gt; behaviour:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  1. not all the slave print their hostname and the program ends suddenly
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  2. both program ends correctly but orted demon is still alive and I
</span><br>
<span class="quotelev1">&gt; need to press crtl-c to exit
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've tryed to recompile my test program with a previous snapshot
</span><br>
<span class="quotelev1">&gt; (openmpi-1.7a1r22794.tar.bz2)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; where I have only the compiled version of OpenMPI (in another machine).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It gives me an error before starting (I've attacehd)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Surfing on the FAQ I found some tip and I verified to compile the
</span><br>
<span class="quotelev1">&gt; program with the correct OpenMPI version,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that the LD_LIBRARY_PATH is consistent.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So I would like to re-compile the openmpi-1.7a1r22794.tar.bz2 but where
</span><br>
<span class="quotelev1">&gt; can I found it ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Federico
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Il giorno 23 febbraio 2011 03:43, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; ha scritto:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Apparently not. I will investigate when I return from vacation next
</span><br>
<span class="quotelev1">&gt; week.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent from my iPad
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Feb 22, 2011, at 12:42 AM, Federico Golfr&#232; Andreasi &lt;
</span><br>
<span class="quotelev1">&gt; federico.golfre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi Ralf,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I've tested spawning with the OpenMPI 1.5 release but that fix is not
</span><br>
<span class="quotelev1">&gt; there.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Are you sure you've added it ?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Federico
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2010/10/19 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The fix should be there - just didn't get mentioned.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Let me know if it isn't and I'll ensure it is in the next one...but I'd
</span><br>
<span class="quotelev1">&gt; be very surprised if it isn't already in there.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Oct 19, 2010, at 3:03 AM, Federico Golfr&#232; Andreasi wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi Ralf !
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I saw that the new realease 1.5 is out.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I didn't found this fix in the &quot;list of changes&quot;, is it present but
</span><br>
<span class="quotelev1">&gt; not mentioned since is a minor fix ?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Federico
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 2010/4/1 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi there!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; It will be in the 1.5.0 release, but not 1.4.2 (couldn't backport the
</span><br>
<span class="quotelev1">&gt; fix). I understand that will come out sometime soon, but no firm date has
</span><br>
<span class="quotelev1">&gt; been set.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Apr 1, 2010, at 4:05 AM, Federico Golfr&#232; Andreasi wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;          I've downloaded and tested the openmpi-1.7a1r22817 snapshot,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; and it works fine for (multiple) spawning more than 128 processes.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; That fix will be included in the next release of OpenMPI, right ?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Do you when it will be released ? Or where I can find that info ?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;      Federico
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2010/3/1 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I'm not sure this patch will solve your problem, but it is worth a
</span><br>
<span class="quotelev1">&gt; try.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
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
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;OpenMPI.error&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;autogen.log&gt;_______________________________________________
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15854/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15855.php">David Robertson: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>Previous message:</strong> <a href="15853.php">Shamis, Pavel: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>In reply to:</strong> <a href="15841.php">Jeff Squyres: "Re: [OMPI users] Number of processes and spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15856.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Reply:</strong> <a href="15856.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
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
