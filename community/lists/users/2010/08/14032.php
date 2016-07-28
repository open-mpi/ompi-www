<?
$subject_val = "Re: [OMPI users] problem with .bashrc stetting of openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 16 02:29:11 2010" -->
<!-- isoreceived="20100816062911" -->
<!-- sent="Mon, 16 Aug 2010 11:44:55 +0530 (IST)" -->
<!-- isosent="20100816061455" -->
<!-- name="sunita_at_[hidden]" -->
<!-- email="sunita_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with .bashrc stetting of openmpi" -->
<!-- id="55878.10.209.4.1.1281939295.squirrel_at_www.chem.iitb.ac.in" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C65476D.1060808_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with .bashrc stetting of openmpi<br>
<strong>From:</strong> <a href="mailto:sunita_at_[hidden]?Subject=Re:%20[OMPI%20users]%20problem%20with%20.bashrc%20stetting%20of%20openmpi"><em>sunita_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-08-16 02:14:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14033.php">sunita_at_[hidden]: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Previous message:</strong> <a href="14031.php">Addepalli, Srirangam V: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>In reply to:</strong> <a href="14010.php">Terry Dontje: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14036.php">Eugene Loh: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Reply:</strong> <a href="14036.php">Eugene Loh: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p><span class="quotelev1">&gt; sunita_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear Open-mpi users,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I installed openmpi-1.4.1 in my user area and then set the path for
</span><br>
<span class="quotelev2">&gt;&gt; openmpi in the .bashrc file as follow. However, am still getting
</span><br>
<span class="quotelev2">&gt;&gt; following
</span><br>
<span class="quotelev2">&gt;&gt; error message whenever am starting the parallel molecular dynamics
</span><br>
<span class="quotelev2">&gt;&gt; simulation using GROMACS. So every time am starting the MD job, I need
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; source the .bashrc file again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Earlier in some other machine I did the same thing and was not getting
</span><br>
<span class="quotelev2">&gt;&gt; any
</span><br>
<span class="quotelev2">&gt;&gt; problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you guys suggest what would be the problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Have you set OPAL_PREFIX to /home/sunitap/soft/openmpi?
</span><br>
How to set OPAL_PREFIX?
<br>
During the installation of openmpi, I ran configure with
<br>
--prefix=/home/sunitap/soft/openmpi
<br>
Did you mean this?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you do a ldd on mdrun_mpi does libmpi.so.0 come up not found?
</span><br>
<p>I got libmpi.so.0 not found. The output I got is
<br>
=========
<br>
ldd `which mdrun_mpi`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libxml2.so.2 =&gt; /usr/lib64/libxml2.so.2 (0x00000039e1800000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00000039dd600000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00000039d5e00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libSM.so.6 =&gt; /usr/lib64/libSM.so.6 (0x00000039d9600000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libICE.so.6 =&gt; /usr/lib64/libICE.so.6 (0x00000039da600000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libX11.so.6 =&gt; /usr/lib64/libX11.so.6 (0x00000039d7200000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00000039d6200000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00000039e4a00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00000039d6600000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00000039d5a00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libz.so.1 =&gt; /usr/lib64/libz.so.1 (0x00000039d6a00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libXau.so.6 =&gt; /usr/lib64/libXau.so.6 (0x00000039d6e00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libXdmcp.so.6 =&gt; /usr/lib64/libXdmcp.so.6 (0x00000039d7600000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00000039d5600000)
<br>
=========
<br>
<span class="quotelev1">&gt; If so and there truly is a libmpi.so.0 in /home/sunitap/soft/openmpi/lib
</span><br>
<span class="quotelev1">&gt; you may want to make sure the bitness of libmpi.so.0 and mdrun_mpi are
</span><br>
<span class="quotelev1">&gt; the same by
</span><br>
<span class="quotelev1">&gt; doing a file command on both.
</span><br>
<span class="quotelev1">&gt;
</span><br>
----------------------------
<br>
The file command on both gives following output.
<br>
file ~/soft/gromacs/bin/mdrun_mpi
<br>
/home/sunitap/soft/gromacs/bin/mdrun_mpi: ELF 64-bit LSB executable, AMD
<br>
x86-64, version 1 (SYSV), for GNU/Linux 2.6.9, dynamically linked (uses
<br>
shared libs), for GNU/Linux 2.6.9, not stripped
<br>
<p>file /home/sunitap/soft/openmpi/lib/libmpi.so.0
<br>
/home/sunitap/soft/openmpi/lib/libmpi.so.0: symbolic link to
<br>
`libmpi.so.0.0.1'
<br>
----------------------------
<br>
<p>Thanks.
<br>
Sunita
<br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; ============.bashrc============
</span><br>
<span class="quotelev2">&gt;&gt; #path for openmpi
</span><br>
<span class="quotelev2">&gt;&gt; export PATH=$PATH:/home/sunitap/soft/openmpi/bin
</span><br>
<span class="quotelev2">&gt;&gt; export CFLAGS=&quot;-I/home/sunitap/soft/openmpi/include&quot;
</span><br>
<span class="quotelev2">&gt;&gt; export LDFLAGS=&quot;-L/home/sunitap/soft/openmpi/lib&quot;
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH=/home/sunitap/soft/openmpi/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ============== error message ==============
</span><br>
<span class="quotelev2">&gt;&gt; mdrun_mpi: error while loading shared libraries: libmpi.so.0: cannot
</span><br>
<span class="quotelev2">&gt;&gt; open
</span><br>
<span class="quotelev2">&gt;&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ============================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any help.
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Sunita
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Oracle
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev1">&gt; Oracle * - Performance Technologies*
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
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
<li><strong>Next message:</strong> <a href="14033.php">sunita_at_[hidden]: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Previous message:</strong> <a href="14031.php">Addepalli, Srirangam V: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>In reply to:</strong> <a href="14010.php">Terry Dontje: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14036.php">Eugene Loh: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Reply:</strong> <a href="14036.php">Eugene Loh: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
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
