<?
$subject_val = "Re: [OMPI users] CMAQ crashes with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 10 11:55:27 2011" -->
<!-- isoreceived="20110810155527" -->
<!-- sent="Wed, 10 Aug 2011 11:55:23 -0400" -->
<!-- isosent="20110810155523" -->
<!-- name="Matthew Russell" -->
<!-- email="mrussel2_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CMAQ crashes with OpenMPI" -->
<!-- id="CAFmqpWr=kRu_HrP+3DBM+5ku2=ase5FLmAoZBfLGvibqLWKUQQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="654C1759-84C4-4351-9B77-BC02EC39E539_at_cox.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] CMAQ crashes with OpenMPI<br>
<strong>From:</strong> Matthew Russell (<em>mrussel2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-10 11:55:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17045.php">Sylvestre Ledru: "[OMPI users] MPI with dynamic arrays"</a>
<li><strong>Previous message:</strong> <a href="17043.php">Shiqing Fan: "Re: [OMPI users] How to setup and use nodes for OpenMPI on Windows"</a>
<li><strong>In reply to:</strong> <a href="17038.php">Doug Reeder: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ack, that's a very good point.  I made sure to compile all my
<br>
other dependencies (NetCDF, IOAPI) with PGI, but I overlooked that one.
<br>
&nbsp;I'll admit that even after years of working with these models, I'm still
<br>
never sure when I can and can't mix binaries compiled with different
<br>
compilers.  I used certain flags that should make my PGI binaries compatible
<br>
with GNU, but I'm never completely sure.
<br>
<p>It was the OpenMPI version that came with MacPorts, I avoided the default on
<br>
on OS X because it does not include a Fortran compiler.
<br>
<p>I'll try building OpenMPI from source again, I had trouble with orte-clean*,
<br>
but I can probably get that working or consult the compilation mailing list.
<br>
<p>Thanks for your input!
<br>
<p>* Undefined symbols for architecture x86_64:
<br>
&nbsp;&nbsp;&quot;_orte_odls&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_orte_errmgr_base_error_abort in libopen-rte.a(errmgr_base_fns.o)
<br>
ld: symbol(s) not found for architecture x86_64
<br>
<p><p><p>On Tue, Aug 9, 2011 at 5:00 PM, Doug Reeder &lt;dlr1_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Matt,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you sure you are building against your macports version of openmpi and
</span><br>
<span class="quotelev1">&gt; not the one that ships w/ lion. In the trace back are items 4-9, that end w/
</span><br>
<span class="quotelev1">&gt; x86_64pg from the pgi compiler. You said you are using pgf90 and pgcc but in
</span><br>
<span class="quotelev1">&gt; the configure input it looks like gcc is being used on lion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt; On Aug 9, 2011, at 1:49 PM, Matthew Russell wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to run CMAQ - an air quality model developed by the US EPA - on
</span><br>
<span class="quotelev1">&gt; a Mac (Lion) using OpenMPI (1.5.3) installed with MacPorts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am able to run CMAQ in parallel, and am able to run small programs that
</span><br>
<span class="quotelev1">&gt; use OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I set the OpenMPI environment variables to use pgf90/pgcc (10.9) as my
</span><br>
<span class="quotelev1">&gt; compiler.  Using PGI because some of the code I need to build is fortran 77
</span><br>
<span class="quotelev1">&gt; ( *sigh* ), and for some other reasons.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error I get is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/local/lib/openmpi/bin/mpirun -v -machinefile
</span><br>
<span class="quotelev1">&gt; /Users/matt/cmaq/darwin11/scripts/cctm/machines8 -np 2
</span><br>
<span class="quotelev1">&gt; /Users/matt/cmaq/darwin11/scripts/cctm/CCTM_e1a_Darwin11_x86_64pg
</span><br>
<span class="quotelev1">&gt; [pontus:72547] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [pontus:72547] Signal: Segmentation fault: 11 (11)
</span><br>
<span class="quotelev1">&gt; [pontus:72547] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [pontus:72547] Failing at address: 0x0
</span><br>
<span class="quotelev1">&gt; [pontus:72547] [ 0] 2   libsystem_c.dylib
</span><br>
<span class="quotelev1">&gt; 0x00007fff91065cfa _sigtramp + 26
</span><br>
<span class="quotelev1">&gt; [pontus:72547] [ 1] 3   ???
</span><br>
<span class="quotelev1">&gt; 0x00007fff5fbe58ab 0x0 + 140734799698091
</span><br>
<span class="quotelev1">&gt; [pontus:72547] [ 2] 4   CCTM_e1a_Darwin11_x86_64pg
</span><br>
<span class="quotelev1">&gt;  0x000000010003c89b distr_env_ + 971
</span><br>
<span class="quotelev1">&gt; [pontus:72547] [ 3] 5   CCTM_e1a_Darwin11_x86_64pg
</span><br>
<span class="quotelev1">&gt;  0x000000010003cbe5 par_init_ + 565
</span><br>
<span class="quotelev1">&gt; [pontus:72547] [ 4] 6   CCTM_e1a_Darwin11_x86_64pg
</span><br>
<span class="quotelev1">&gt;  0x0000000100032e1b MAIN_ + 219
</span><br>
<span class="quotelev1">&gt; [pontus:72547] [ 5] 7   CCTM_e1a_Darwin11_x86_64pg
</span><br>
<span class="quotelev1">&gt;  0x00000001000016f6 main + 70
</span><br>
<span class="quotelev1">&gt; [pontus:72547] [ 6] 8   CCTM_e1a_Darwin11_x86_64pg
</span><br>
<span class="quotelev1">&gt;  0x000000010000163a _start + 248
</span><br>
<span class="quotelev1">&gt; [pontus:72547] [ 7] 9   CCTM_e1a_Darwin11_x86_64pg
</span><br>
<span class="quotelev1">&gt;  0x0000000100001541 start + 33
</span><br>
<span class="quotelev1">&gt; [pontus:72547] [ 8] 10  ???
</span><br>
<span class="quotelev1">&gt; 0x0000000000000001 0x0 + 1
</span><br>
<span class="quotelev1">&gt; [pontus:72547] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 72547 on node
</span><br>
<span class="quotelev1">&gt; pontus.cee.carleton.ca exited on signal 11 (Segmentation fault: 11).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't expect anyone to know the solution from this brief error message,
</span><br>
<span class="quotelev1">&gt; however I was wondering if anyone has insight on how I might debug this?  I
</span><br>
<span class="quotelev1">&gt; am too new to both OpenMPI and CMAQ to be served that well from this
</span><br>
<span class="quotelev1">&gt; traceback.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm told by others in my research group that CMAQ with OpenMPI on Linux
</span><br>
<span class="quotelev1">&gt; works fine, and that the error I'm getting is very similar to the error
</span><br>
<span class="quotelev1">&gt; others got when trying this on a Mac (Snow Leopard) with ifort.. before they
</span><br>
<span class="quotelev1">&gt; gave up...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI was configured with:
</span><br>
<span class="quotelev1">&gt; configure.args  --sysconfdir=${prefix}/etc/${name} \
</span><br>
<span class="quotelev1">&gt;                 --includedir=${prefix}/include/${name} \
</span><br>
<span class="quotelev1">&gt;                 --bindir=${prefix}/lib/${name}/bin \
</span><br>
<span class="quotelev1">&gt;                 --mandir=${prefix}/share/man \
</span><br>
<span class="quotelev1">&gt;                 --with-memory-manager=none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # enable build on Lion
</span><br>
<span class="quotelev1">&gt; if {$os.major} &gt;= 11} {
</span><br>
<span class="quotelev1">&gt;         configure.compiler       gcc-4.2
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The --with-memory-manager is there because I saw it fix potentially
</span><br>
<span class="quotelev1">&gt; similar problems in other postings to this Mailing list.  It didn't make a
</span><br>
<span class="quotelev1">&gt; difference though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17044/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17045.php">Sylvestre Ledru: "[OMPI users] MPI with dynamic arrays"</a>
<li><strong>Previous message:</strong> <a href="17043.php">Shiqing Fan: "Re: [OMPI users] How to setup and use nodes for OpenMPI on Windows"</a>
<li><strong>In reply to:</strong> <a href="17038.php">Doug Reeder: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<!-- nextthread="start" -->
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
