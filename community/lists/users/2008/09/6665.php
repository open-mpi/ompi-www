<?
$subject_val = "Re: [OMPI users] conflict among differenv MPIs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 14:12:43 2008" -->
<!-- isoreceived="20080922181243" -->
<!-- sent="Mon, 22 Sep 2008 11:12:38 -0700 (PDT)" -->
<!-- isosent="20080922181238" -->
<!-- name="Shafagh Jafer" -->
<!-- email="barfy27_at_[hidden]" -->
<!-- subject="Re: [OMPI users] conflict among differenv MPIs" -->
<!-- id="20827.26716.qm_at_web34801.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="71F4C083-334F-482E-9151-434DD750AEDD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] conflict among differenv MPIs<br>
<strong>From:</strong> Shafagh Jafer (<em>barfy27_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 14:12:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6666.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Previous message:</strong> <a href="6664.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>In reply to:</strong> <a href="6664.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6666.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Reply:</strong> <a href="6666.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am gonna kill myself :( i dont know what the problem is... I 'm gonna explain the details again, please bare me and help me :(
<br>
&#160;
<br>
Ok yes I used mpic++. Actually I checked mpicxx -show and the path were correct. let me describe my problem again.
<br>
When I run my code (after making sure that openmpi is installed correctly and all the env varibles are set properly), i get the following error which is when I make a call to the following function:
<br>
----------------------------------------------
<br>
int CommPhyMPI:: physicalGetSize() const {
<br>
int size ;
<br>
MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
return size ;
<br>
}
<br>
-------------------------------------------
<br>
The errors i get are the follwoing:
<br>
=====================
<br>
[DeepThought:31144] *** Process received signal ***
<br>
[DeepThought:31144] Signal: Segmentation fault (11)
<br>
[DeepThought:31144] Signal code: Address not mapped (1)
<br>
[DeepThought:31144] Failing at address: 0xcf
<br>
[DeepThought:31144] [ 0] /lib/tls/libpthread.so.0 [0xc16f80]
<br>
[DeepThought:31144] [ 1] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd++(physicalGetId__C10CommPhyMPI+0x14) [0x8305880]
<br>
[DeepThought:31144] [ 2] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd++(physicalCommGetId__Fv+0x43) [0x82ff81b]
<br>
[DeepThought:31144] [ 3] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd++(openComm__16StandAloneLoader+0x1f) [0x80fdf43]
<br>
[DeepThought:31144] [ 4] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd++(run__21ParallelMainSimulator+0x1640) [0x81ea53c]
<br>
[DeepThought:31144] [ 5] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd++(main+0xde) [0x80a58ce]
<br>
[DeepThought:31144] [ 6] /lib/tls/libc.so.6(__libc_start_main+0xda) [0x1c979a]
<br>
[DeepThought:31144] [ 7] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd++(sinh+0x4d) [0x80a2221]
<br>
[DeepThought:31144] *** End of error message ***
<br>
mpirun noticed that job rank 0 with PID 31144 on node DeepThought.sce.carleton.ca exited on signal 11 (Segmentation fault).
<br>
=====================
<br>
So I thought that maybe my problem is that when I include &quot;mpi.h&quot; in my source code, it picks the wrong one. So in my source code instead of just saying include &quot;mpi.h&quot; I put the path too, so it looks like =&gt; &quot;include /opt/openmpi/1.2.7/include/mpi.h&quot;, and now when I run my code aftre this change, aside from errors which I will paste below, i get a warning that shows mpi.h in mpicxx.h is the wrong one from usr/local/include and not from /opt/openmpi/...
<br>
------------------
<br>
In file included from /usr/local/include/mpidefs.h:49,
<br>
from /usr/local/include/mpi.h:230,
<br>
from /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:32,
<br>
from /opt/openmpi/1.2.7/include/mpi.h:1795,
<br>
from CommPhyMPI.cc:36:
<br>
/usr/local/include/mpio.h:79: warning: `MPI_FILE_NULL' redefined
<br>
/opt/openmpi/1.2.7/include/mpi.h:456: warning: this is the location of the previous definition
<br>
In file included from /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:32,
<br>
from /opt/openmpi/1.2.7/include/mpi.h:1795,
<br>
from CommPhyMPI.cc:36:
<br>
/usr/local/include/mpi.h:263: warning: `MPI_STATUS_IGNORE' redefined
<br>
/opt/openmpi/1.2.7/include/mpi.h:458: warning: this is the location of the previous definition
<br>
/usr/local/include/mpi.h:264: warning: `MPI_STATUSES_IGNORE' redefined
<br>
/opt/openmpi/1.2.7/include/mpi.h:459: warning: this is the location of the previous definition
<br>
------------------
<br>
&#160;
<br>
here are the errors:
<br>
============================
<br>
In file included from /opt/openmpi/1.2.7/include/mpi.h:1795,
<br>
from CommPhyMPI.cc:36:
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:167: openmpi/ompi/mpi/cxx/constants.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:168: openmpi/ompi/mpi/cxx/functions.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:169: openmpi/ompi/mpi/cxx/datatype.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:193: openmpi/ompi/mpi/cxx/exception.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:194: openmpi/ompi/mpi/cxx/op.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:195: openmpi/ompi/mpi/cxx/status.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:196: openmpi/ompi/mpi/cxx/request.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:197: openmpi/ompi/mpi/cxx/group.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:198: openmpi/ompi/mpi/cxx/comm.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:199: openmpi/ompi/mpi/cxx/win.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:200: openmpi/ompi/mpi/cxx/file.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:201: openmpi/ompi/mpi/cxx/errhandler.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:202: openmpi/ompi/mpi/cxx/intracomm.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:203: openmpi/ompi/mpi/cxx/topology.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:204: openmpi/ompi/mpi/cxx/intercomm.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:205: openmpi/ompi/mpi/cxx/info.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:244: openmpi/ompi/mpi/cxx/datatype_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:245: openmpi/ompi/mpi/cxx/functions_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:246: openmpi/ompi/mpi/cxx/request_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:247: openmpi/ompi/mpi/cxx/comm_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:248: openmpi/ompi/mpi/cxx/intracomm_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:249: openmpi/ompi/mpi/cxx/topology_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:250: openmpi/ompi/mpi/cxx/intercomm_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:251: openmpi/ompi/mpi/cxx/group_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:252: openmpi/ompi/mpi/cxx/op_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:253: openmpi/ompi/mpi/cxx/errhandler_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:254: openmpi/ompi/mpi/cxx/status_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:255: openmpi/ompi/mpi/cxx/info_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:256: openmpi/ompi/mpi/cxx/win_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:257: openmpi/ompi/mpi/cxx/file_inln.h: No such file or directory
<br>
make[1]: *** [/nfs/sjafer/phd/openMPI/latest_cd++_timewarp/warped/TimeWarp/src/obj/CommPhyMPI.o] Error 1
<br>
=============================
<br>
<p><p>--- On Mon, 9/22/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] conflict among differenv MPIs
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Monday, September 22, 2008, 10:33 AM
<br>
<p>On Sep 22, 2008, at 1:24 PM, Shafagh Jafer wrote:
<br>
<p><span class="quotelev1">&gt; I am confused now...should I use &quot;/openmpi/mpic++ -E&quot;  or
</span><br>
&quot;/openmpi/ 
<br>
<span class="quotelev1">&gt; mpic++&quot; to compile my entire code??
</span><br>
<p>mpic++.  I was showing you the -E functionality so that you could  
<br>
determine whether it really is picking up the wrong mpi.h or not.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Mon, 9/22/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] conflict among differenv MPIs
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Monday, September 22, 2008, 6:12 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 22, 2008, at 8:48 AM, Robert Kubrick wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Recompile your own version of openmpi in a local directory, set your
</span><br>
<span class="quotelev2">&gt; &gt; PATH to your local openmpi install.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; export PATH=/my/openmpi/install/include:/usr/local/include
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpicxx -show
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicxx --showme should show you the exact command that Open MPI's
</span><br>
<span class="quotelev1">&gt; wrapper compiler is using to compile your application.  There should
</span><br>
<span class="quotelev1">&gt; already be an explicit -I there for where OMPI's mpi.h resides.  If
</span><br>
<span class="quotelev1">&gt; that's the case, the compiler should look there *first* for mpi.h,
</span><br>
<span class="quotelev1">&gt; not /usr/local/include.  Consider following example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - I created include-test.c which just does an &quot;#include
</span><br>
<span class="quotelev1">&gt; &lt;stdio.h&gt;&quot;.
</span><br>
<span class="quotelev1">&gt; - If I run this through the preprocessor, you can see that it's
</span><br>
<span class="quotelev1">&gt; getting /usr/include/stdio.h:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [6:09] svbu-mpi:~/tmp % cat include-test.c
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; [6:09] svbu-mpi:~/tmp % gcc -E include-test.c | head
</span><br>
<span class="quotelev1">&gt; # 1 &quot;include-test.c&quot;
</span><br>
<span class="quotelev1">&gt; # 1 &quot;&lt;built-in&gt;&quot;
</span><br>
<span class="quotelev1">&gt; # 1 &quot;&lt;command line&gt;&quot;
</span><br>
<span class="quotelev1">&gt; # 1 &quot;include-test.c&quot;
</span><br>
<span class="quotelev1">&gt; # 1 &quot;/usr/include/stdio.h&quot; 1 3 4
</span><br>
<span class="quotelev1">&gt; # 28 &quot;/usr/include/stdio.h&quot; 3 4
</span><br>
<span class="quotelev1">&gt; # 1 &quot;/usr/include/features.h&quot; 1 3 4
</span><br>
<span class="quotelev1">&gt; # 319 &quot;/usr/include/features.h&quot; 3 4
</span><br>
<span class="quotelev1">&gt; # 1 &quot;/usr/include/sys/cdefs.h&quot; 1 3 4
</span><br>
<span class="quotelev1">&gt; # 320 &quot;/usr/include/features.h&quot; 2 3 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - But now I make my-include-dir/stdio.h with a single line in it
</span><br>
<span class="quotelev1">&gt; - Then I recompile with an explicit -I for that directory and you can
</span><br>
<span class="quotelev1">&gt; see that the compiler picks up that stdio.h, not /usr/include/stdio.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [6:09] svbu-mpi:~/tmp % cat my-include-dir/stdio.h
</span><br>
<span class="quotelev1">&gt; typedef int foo;
</span><br>
<span class="quotelev1">&gt; [6:09] svbu-mpi:~/tmp % gcc -E -Imy-include-dir include-test.c | head
</span><br>
<span class="quotelev1">&gt; # 1 &quot;include-test.c&quot;
</span><br>
<span class="quotelev1">&gt; # 1 &quot;&lt;built-in&gt;&quot;
</span><br>
<span class="quotelev1">&gt; # 1 &quot;&lt;command line&gt;&quot;
</span><br>
<span class="quotelev1">&gt; # 1 &quot;include-test.c&quot;
</span><br>
<span class="quotelev1">&gt; # 1 &quot;my-include-dir/stdio.h&quot; 1
</span><br>
<span class="quotelev1">&gt; typedef int foo;
</span><br>
<span class="quotelev1">&gt; # 2 &quot;include-test.c&quot; 2
</span><br>
<span class="quotelev1">&gt; [6:10] svbu-mpi:~/tmp %
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you sure that OMPI's mpicxx.h is picking up MPICH's mpi.h?  If
</span><br>
so,
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; how?  Did you run it through the preprocessor (perhaps similar to
</span><br>
<span class="quotelev1">&gt; above), or step through a debugger or something?
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6665/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6666.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Previous message:</strong> <a href="6664.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>In reply to:</strong> <a href="6664.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6666.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Reply:</strong> <a href="6666.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
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
