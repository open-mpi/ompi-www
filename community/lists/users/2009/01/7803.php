<?
$subject_val = "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 12:45:06 2009" -->
<!-- isoreceived="20090123174506" -->
<!-- sent="Fri, 23 Jan 2009 18:45:01 +0100" -->
<!-- isosent="20090123174501" -->
<!-- name="Geoffroy Pignot" -->
<!-- email="geopignot_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)" -->
<!-- id="b4f9bf870901230945mfd13839y1109e3c8b2cf50d0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)<br>
<strong>From:</strong> Geoffroy Pignot (<em>geopignot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 12:45:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7804.php">George Bosilca: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7802.php">Eugene Loh: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Maybe in reply to:</strong> <a href="7771.php">Geoffroy Pignot: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7818.php">Ralph Castain: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<li><strong>Reply:</strong> <a href="7818.php">Ralph Castain: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thanks for taking time to look into my problem. As you can see , it happens
<br>
when i dont have both exe available on both nodes.
<br>
When it's the case (test3) , it works.  I dont know if my particular libdir
<br>
causes the problem or not but I 'll try on Monday with a more classical
<br>
setup.
<br>
<p>I ll keep you inform.
<br>
<p>Geoffroy
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HI Geoffrey
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmmm....well, I redid my tests to mirror yours, and still cannot
</span><br>
<span class="quotelev1">&gt; replicate this problem. I tried it with both slurm and ssh
</span><br>
<span class="quotelev1">&gt; environments - no difference in the results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % make hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % cp hello hello2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % ls
</span><br>
<span class="quotelev1">&gt; hello hello2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % mpirun -n 1 -host odin038 ./hello : -n 1 -host odin039 ./hello2
</span><br>
<span class="quotelev1">&gt; Hello World, I am 0 of 2
</span><br>
<span class="quotelev1">&gt; Hello World, I am 1 of 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried a variety of combinations, including giving a fake
</span><br>
<span class="quotelev1">&gt; executable as one of the apps, and have not been able to replicate
</span><br>
<span class="quotelev1">&gt; your observed behavior. In all cases, it works correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like you are using rsh/ssh as you launch environment. All I
</span><br>
<span class="quotelev1">&gt; can advise at this stage is to again check to ensure that
</span><br>
<span class="quotelev1">&gt; the .login/.cshrc (or whatever) on your remote nodes isn't setting
</span><br>
<span class="quotelev1">&gt; your path to point at another OMPI installation. The fact that you can
</span><br>
<span class="quotelev1">&gt; run at all would seem to indicate that things are okay, but I honestly
</span><br>
<span class="quotelev1">&gt; have no ideas at this stage as to why you are seeing this behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry I can't be of more help...
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 23, 2009, at 12:57 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I redid few tests with my hello world , here are my results.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; First of all my config :
</span><br>
<span class="quotelev2">&gt; &gt; configure --prefix=/tmp/openmpi-1.3 --libdir=/tmp/openmpi-1.3/lib64
</span><br>
<span class="quotelev2">&gt; &gt; --enable-heterogeneous . you will find attached my ompi_info -param
</span><br>
<span class="quotelev2">&gt; &gt; all all
</span><br>
<span class="quotelev2">&gt; &gt; compil02 and compil03 are identical Rh43 64 bits nodes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Test 1 :
</span><br>
<span class="quotelev2">&gt; &gt; compil02% ls /tmp
</span><br>
<span class="quotelev2">&gt; &gt; a.out  openmpi-1.3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; compil03% ls /tmp
</span><br>
<span class="quotelev2">&gt; &gt; a.out  openmpi-1.3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-1.3/bin/mpirun -d -n 1 -host compil03 /tmp/a.out : -n 1
</span><br>
<span class="quotelev2">&gt; &gt; -host compil02 /tmp/a.out
</span><br>
<span class="quotelev2">&gt; &gt; WORKS
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Test 2 :
</span><br>
<span class="quotelev2">&gt; &gt; compil02% mv a.out a.out_64 ; ls /tmp
</span><br>
<span class="quotelev2">&gt; &gt; a.out_64  openmpi-1.3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; compil03% ls /tmp
</span><br>
<span class="quotelev2">&gt; &gt; a.out  openmpi-1.3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; compil03% /tmp/openmpi-1.3/bin/mpirun -d -n 1 -host compil03 /tmp/
</span><br>
<span class="quotelev2">&gt; &gt; a.out : -n 1 -host compil02 /tmp/a.out_64
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03774] procdir: /tmp/openmpi-sessions-
</span><br>
<span class="quotelev2">&gt; &gt; gpignot_at_compil03_0/20717/0/0
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03774] jobdir: /tmp/openmpi-sessions-
</span><br>
<span class="quotelev2">&gt; &gt; gpignot_at_compil03_0/20717/0
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03774] top: openmpi-sessions-gpignot_at_compil03_0
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03774] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03774] mpirun: reset PATH: /tmp/openmpi-1.3/bin:/u/gpignot/
</span><br>
<span class="quotelev2">&gt; &gt; jobmgr/bin:.:/cgg/lv5000/jobmgr/bin:/cgg/lv5000/jobmgr/exec/Linux2.6-
</span><br>
<span class="quotelev2">&gt; &gt; x86_64/PIV:/cgg/jobmgr/bin:/cgg/jobmgr/exec/Linux2.6-x86_64/PIV:/cgg/
</span><br>
<span class="quotelev2">&gt; &gt; lv5000/bin:/cgg/lv5000/exec/Linux2.6-x86_64/PIV:/cgg/util:/bin:/usr/
</span><br>
<span class="quotelev2">&gt; &gt; bin:/usr/sbin:/etc:/usr/etc:/usr/local/bin:/usr/bin/X11:/nfs/softs/
</span><br>
<span class="quotelev2">&gt; &gt; TOOLS/bin:/nfs/netapp1/DEVTOOLS/bin:/nfs/netapp1/DEVTOOLS/free/
</span><br>
<span class="quotelev2">&gt; &gt; Linux2.6-x86_64/bin:/cgg/localdev:/cgg/Applis/bin
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03774] mpirun: reset LD_LIBRARY_PATH: /tmp/openmpi-1.3/
</span><br>
<span class="quotelev2">&gt; &gt; lib64:/tmp/openmpi-1.3/lib64
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10684] procdir: /tmp/openmpi-sessions-
</span><br>
<span class="quotelev2">&gt; &gt; gpignot_at_compil02_0/20717/0/1
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10684] jobdir: /tmp/openmpi-sessions-
</span><br>
<span class="quotelev2">&gt; &gt; gpignot_at_compil02_0/20717/0
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10684] top: openmpi-sessions-gpignot_at_compil02_0
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10684] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03774] [[20717,0],0] node[0].name compil03 daemon 0 arch
</span><br>
<span class="quotelev2">&gt; &gt; ffc91200
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03774] [[20717,0],0] node[1].name compil02 daemon 1 arch
</span><br>
<span class="quotelev2">&gt; &gt; ffc91200
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10684] [[20717,0],1] node[0].name compil03 daemon 0 arch
</span><br>
<span class="quotelev2">&gt; &gt; ffc91200
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10684] [[20717,0],1] node[1].name compil02 daemon 1 arch
</span><br>
<span class="quotelev2">&gt; &gt; ffc91200
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03774] Info: Setting up debugger process table for
</span><br>
<span class="quotelev2">&gt; &gt; applications
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_being_debugged = 0
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_debug_state = 1
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_i_am_starter = 0
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_proctable_size = 2
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_proctable:
</span><br>
<span class="quotelev2">&gt; &gt;     (i, host, exe, pid) = (0, compil03, /tmp/a.out, 0)
</span><br>
<span class="quotelev2">&gt; &gt;     (i, host, exe, pid) = (1, compil02, /tmp/a.out_64, 0)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; HANGS : both exe have pid 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Test 3 :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; compil02% cp a.out_64 a.out ; ls /tmp
</span><br>
<span class="quotelev2">&gt; &gt; a.out_64  a.out  openmpi-1.3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; compil03% ls /tmp
</span><br>
<span class="quotelev2">&gt; &gt; a.out  openmpi-1.3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03777] procdir: /tmp/openmpi-sessions-
</span><br>
<span class="quotelev2">&gt; &gt; gpignot_at_compil03_0/20626/0/0
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03777] jobdir: /tmp/openmpi-sessions-
</span><br>
<span class="quotelev2">&gt; &gt; gpignot_at_compil03_0/20626/0
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03777] top: openmpi-sessions-gpignot_at_compil03_0
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03777] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03777] mpirun: reset PATH: /tmp/openmpi-1.3/bin:/u/gpignot/
</span><br>
<span class="quotelev2">&gt; &gt; jobmgr/bin:.:/cgg/lv5000/jobmgr/bin:/cgg/lv5000/jobmgr/exec/Linux2.6-
</span><br>
<span class="quotelev2">&gt; &gt; x86_64/PIV:/cgg/jobmgr/bin:/cgg/jobmgr/exec/Linux2.6-x86_64/PIV:/cgg/
</span><br>
<span class="quotelev2">&gt; &gt; lv5000/bin:/cgg/lv5000/exec/Linux2.6-x86_64/PIV:/cgg/util:/bin:/usr/
</span><br>
<span class="quotelev2">&gt; &gt; bin:/usr/sbin:/etc:/usr/etc:/usr/local/bin:/usr/bin/X11:/nfs/softs/
</span><br>
<span class="quotelev2">&gt; &gt; TOOLS/bin:/nfs/netapp1/DEVTOOLS/bin:/nfs/netapp1/DEVTOOLS/free/
</span><br>
<span class="quotelev2">&gt; &gt; Linux2.6-x86_64/bin:/cgg/localdev:/cgg/Applis/bin
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03777] mpirun: reset LD_LIBRARY_PATH: /tmp/openmpi-1.3/
</span><br>
<span class="quotelev2">&gt; &gt; lib64:/tmp/openmpi-1.3/lib64
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10786] procdir: /tmp/openmpi-sessions-
</span><br>
<span class="quotelev2">&gt; &gt; gpignot_at_compil02_0/20626/0/1
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10786] jobdir: /tmp/openmpi-sessions-
</span><br>
<span class="quotelev2">&gt; &gt; gpignot_at_compil02_0/20626/0
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10786] top: openmpi-sessions-gpignot_at_compil02_0
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10786] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03777] [[20626,0],0] node[0].name compil03 daemon 0 arch
</span><br>
<span class="quotelev2">&gt; &gt; ffc91200
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03777] [[20626,0],0] node[1].name compil02 daemon 1 arch
</span><br>
<span class="quotelev2">&gt; &gt; ffc91200
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10786] [[20626,0],1] node[0].name compil03 daemon 0 arch
</span><br>
<span class="quotelev2">&gt; &gt; ffc91200
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10786] [[20626,0],1] node[1].name compil02 daemon 1 arch
</span><br>
<span class="quotelev2">&gt; &gt; ffc91200
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03777] Info: Setting up debugger process table for
</span><br>
<span class="quotelev2">&gt; &gt; applications
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_being_debugged = 0
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_debug_state = 1
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_i_am_starter = 0
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_proctable_size = 2
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_proctable:
</span><br>
<span class="quotelev2">&gt; &gt;     (i, host, exe, pid) = (0, compil03, /tmp/a.out, 0)
</span><br>
<span class="quotelev2">&gt; &gt;     (i, host, exe, pid) = (1, compil02, /tmp/a.out_64, 10787)
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10787] procdir: /tmp/openmpi-sessions-
</span><br>
<span class="quotelev2">&gt; &gt; gpignot_at_compil02_0/20626/1/1
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10787] jobdir: /tmp/openmpi-sessions-
</span><br>
<span class="quotelev2">&gt; &gt; gpignot_at_compil02_0/20626/1
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10787] top: openmpi-sessions-gpignot_at_compil02_0
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10787] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10787] [[20626,1],1] node[0].name compil03 daemon 0 arch
</span><br>
<span class="quotelev2">&gt; &gt; ffc91200
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10787] [[20626,1],1] node[1].name compil02 daemon 1 arch
</span><br>
<span class="quotelev2">&gt; &gt; ffc91200
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; HANGS : go a little bit further but still one pid = 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Test4:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; compil02% ls /tmp
</span><br>
<span class="quotelev2">&gt; &gt; a.out_64  a.out  openmpi-1.3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; compil03% cp a.out a.out_64 ; ls /tmp
</span><br>
<span class="quotelev2">&gt; &gt; a.out_64  a.out  openmpi-1.3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; compil03% /tmp/openmpi-1.3/bin/mpirun -d -n 1 -host compil03 /tmp/
</span><br>
<span class="quotelev2">&gt; &gt; a.out : -n 1 -host compil02 /tmp/a.out_64
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03789] procdir: /tmp/openmpi-sessions-
</span><br>
<span class="quotelev2">&gt; &gt; gpignot_at_compil03_0/20638/0/0
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03789] jobdir: /tmp/openmpi-sessions-
</span><br>
<span class="quotelev2">&gt; &gt; gpignot_at_compil03_0/20638/0
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03789] top: openmpi-sessions-gpignot_at_compil03_0
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03789] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03789] mpirun: reset PATH: /tmp/openmpi-1.3/bin:/u/gpignot/
</span><br>
<span class="quotelev2">&gt; &gt; jobmgr/bin:.:/cgg/lv5000/jobmgr/bin:/cgg/lv5000/jobmgr/exec/Linux2.6-
</span><br>
<span class="quotelev2">&gt; &gt; x86_64/PIV:/cgg/jobmgr/bin:/cgg/jobmgr/exec/Linux2.6-x86_64/PIV:/cgg/
</span><br>
<span class="quotelev2">&gt; &gt; lv5000/bin:/cgg/lv5000/exec/Linux2.6-x86_64/PIV:/cgg/util:/bin:/usr/
</span><br>
<span class="quotelev2">&gt; &gt; bin:/usr/sbin:/etc:/usr/etc:/usr/local/bin:/usr/bin/X11:/nfs/softs/
</span><br>
<span class="quotelev2">&gt; &gt; TOOLS/bin:/nfs/netapp1/DEVTOOLS/bin:/nfs/netapp1/DEVTOOLS/free/
</span><br>
<span class="quotelev2">&gt; &gt; Linux2.6-x86_64/bin:/cgg/localdev:/cgg/Applis/bin
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03789] mpirun: reset LD_LIBRARY_PATH: /tmp/openmpi-1.3/
</span><br>
<span class="quotelev2">&gt; &gt; lib64:/tmp/openmpi-1.3/lib64
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10937] procdir: /tmp/openmpi-sessions-
</span><br>
<span class="quotelev2">&gt; &gt; gpignot_at_compil02_0/20638/0/1
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10937] jobdir: /tmp/openmpi-sessions-
</span><br>
<span class="quotelev2">&gt; &gt; gpignot_at_compil02_0/20638/0
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10937] top: openmpi-sessions-gpignot_at_compil02_0
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10937] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03789] [[20638,0],0] node[0].name compil03 daemon 0 arch
</span><br>
<span class="quotelev2">&gt; &gt; ffc91200
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03789] [[20638,0],0] node[1].name compil02 daemon 1 arch
</span><br>
<span class="quotelev2">&gt; &gt; ffc91200
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10937] [[20638,0],1] node[0].name compil03 daemon 0 arch
</span><br>
<span class="quotelev2">&gt; &gt; ffc91200
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10937] [[20638,0],1] node[1].name compil02 daemon 1 arch
</span><br>
<span class="quotelev2">&gt; &gt; ffc91200
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03789] Info: Setting up debugger process table for
</span><br>
<span class="quotelev2">&gt; &gt; applications
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_being_debugged = 0
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_debug_state = 1
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_i_am_starter = 0
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_proctable_size = 2
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_proctable:
</span><br>
<span class="quotelev2">&gt; &gt;     (i, host, exe, pid) = (0, compil03, /tmp/a.out, 3792)
</span><br>
<span class="quotelev2">&gt; &gt;     (i, host, exe, pid) = (1, compil02, /tmp/a.out_64, 10938)
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03792] procdir: /tmp/openmpi-sessions-
</span><br>
<span class="quotelev2">&gt; &gt; gpignot_at_compil03_0/20638/1/0
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03792] jobdir: /tmp/openmpi-sessions-
</span><br>
<span class="quotelev2">&gt; &gt; gpignot_at_compil03_0/20638/1
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03792] top: openmpi-sessions-gpignot_at_compil03_0
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03792] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03792] [[20638,1],0] node[0].name compil03 daemon 0 arch
</span><br>
<span class="quotelev2">&gt; &gt; ffc91200
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03792] [[20638,1],0] node[1].name compil02 daemon 1 arch
</span><br>
<span class="quotelev2">&gt; &gt; ffc91200
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10938] procdir: /tmp/openmpi-sessions-
</span><br>
<span class="quotelev2">&gt; &gt; gpignot_at_compil02_0/20638/1/1
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10938] jobdir: /tmp/openmpi-sessions-
</span><br>
<span class="quotelev2">&gt; &gt; gpignot_at_compil02_0/20638/1
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10938] top: openmpi-sessions-gpignot_at_compil02_0
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10938] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10938] [[20638,1],1] node[0].name compil03 daemon 0 arch
</span><br>
<span class="quotelev2">&gt; &gt; ffc91200
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10938] [[20638,1],1] node[1].name compil02 daemon 1 arch
</span><br>
<span class="quotelev2">&gt; &gt; ffc91200
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 0 of 2
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 1 of 2
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03792] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev2">&gt; &gt; leaving
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10938] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev2">&gt; &gt; leaving
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03789] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev2">&gt; &gt; leaving
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10937] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev2">&gt; &gt; leaving
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03789] sess_dir_finalize: job session dir not empty -
</span><br>
<span class="quotelev2">&gt; &gt; leaving
</span><br>
<span class="quotelev2">&gt; &gt; [compil02:10937] sess_dir_finalize: job session dir not empty -
</span><br>
<span class="quotelev2">&gt; &gt; leaving
</span><br>
<span class="quotelev2">&gt; &gt; [compil03:03789] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev2">&gt; &gt; leaving
</span><br>
<span class="quotelev2">&gt; &gt; orterun: exiting with status 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; WORKS PERFECTLY
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I dont understand exactly what is going on , but I am not sure that
</span><br>
<span class="quotelev2">&gt; &gt; this behavoiur is considered as normal
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance for your comments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Geoffroy
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;geoffroy_ompi_info&gt;_______________________________________________
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
<span class="quotelev1">&gt; End of users Digest, Vol 1127, Issue 8
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7803/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7804.php">George Bosilca: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7802.php">Eugene Loh: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Maybe in reply to:</strong> <a href="7771.php">Geoffroy Pignot: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7818.php">Ralph Castain: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<li><strong>Reply:</strong> <a href="7818.php">Ralph Castain: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
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
