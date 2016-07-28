<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 20 05:45:37 2007" -->
<!-- isoreceived="20070620094537" -->
<!-- sent="Wed, 20 Jun 2007 11:51:11 +0200" -->
<!-- isosent="20070620095111" -->
<!-- name="Marcin Skoczylas" -->
<!-- email="Marcin.Skoczylas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processes stuck in MPI_BARRIER" -->
<!-- id="4678F88F.9030309_at_lnl.infn.it" -->
<!-- charset="ISO-8859-2" -->
<!-- inreplyto="20070619131823.GB14843_at_defiant" -->
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
<strong>From:</strong> Marcin Skoczylas (<em>Marcin.Skoczylas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-20 05:51:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3512.php">Terry Frankcombe: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>Previous message:</strong> <a href="3510.php">Gleb Natapov: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="3501.php">Chris Reeves: "[OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had almost the same situation when I upgraded OpenMPI from very old 
<br>
version to 1.2.2. All processes seemed to stuck in MPI_Barrier, as a 
<br>
walk-around I just commented out all MPI_Barrier occurrences in my 
<br>
program and it started to work perfectly.
<br>
<p>greets, Marcin
<br>
<p>Chris Reeves wrote:
<br>
<span class="quotelev1">&gt; (This time with attachments...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've had a look through the FAQ and searched the list archives and can't find
</span><br>
<span class="quotelev1">&gt; any similar problems to this one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running OpenMPI 1.2.2 on 10 Intel iMacs (Intel Core2 Duo CPU). I am
</span><br>
<span class="quotelev1">&gt; specifiying two slots per machine and starting my job with:
</span><br>
<span class="quotelev1">&gt; /Network/Guanine/csr201/local-i386/opt/openmpi/bin/mpirun -np 20 --hostfile
</span><br>
<span class="quotelev1">&gt; bhost.jobControl nice -19 /Network/Guanine/csr201/jobControl/run_torus.pl
</span><br>
<span class="quotelev1">&gt; /Network/Guanine/csr201/models-gap/torus/torus.ompiosx-intel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The config.log and output of 'ompi_info --all' are attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also attached is a small patch that I wrote to work around some firewall
</span><br>
<span class="quotelev1">&gt; limitations on the nodes (I don't know if there's a better way to do this -
</span><br>
<span class="quotelev1">&gt; suggestions are welcome). The patch may or may not be relevant, but I'm not
</span><br>
<span class="quotelev1">&gt; ruling out network issues and a bit of peer review never goes amiss in case
</span><br>
<span class="quotelev1">&gt; I've done something very silly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The programme that I'm trying to run is fairly hefty, so I'm afraid that I
</span><br>
<span class="quotelev1">&gt; can't provide you with a simple test case to highlight the problem. The best I
</span><br>
<span class="quotelev1">&gt; can do it provide you with a description of where I'm at and then ask for some
</span><br>
<span class="quotelev1">&gt; advice/suggestions...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code itself has run in the past with various versions of MPI/LAM and
</span><br>
<span class="quotelev1">&gt; OpenMPI and hasn't, to my knowledge, undergone any significant changes
</span><br>
<span class="quotelev1">&gt; recently. I have noticed delays before, both on this system and on others,
</span><br>
<span class="quotelev1">&gt; when MPI_BARRIER is called but they don't always result in a permanent
</span><br>
<span class="quotelev1">&gt; 'spinning' of the process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The 20-node job that I'm running right now is using 90-100% of every CPU, but
</span><br>
<span class="quotelev1">&gt; hasn't made any progress for around 14 hours. I've used GDB to attach to each
</span><br>
<span class="quotelev1">&gt; of these processes and verified that every single one of them is sitting
</span><br>
<span class="quotelev1">&gt; inside a call to MPI_BARRIER. My understanding is that once every process hits
</span><br>
<span class="quotelev1">&gt; the barrier, they should then move on to the next part of the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's an example of what I see when I attach to one of these processes:
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attaching to program: `/private/var/automount/Network/Guanine/csr201/models-gap/torus/torus.ompiosx-intel', process 29578.
</span><br>
<span class="quotelev1">&gt; Reading symbols for shared libraries ..+++++.................................................................... done
</span><br>
<span class="quotelev1">&gt; 0x9000121c in sigprocmask ()
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x9000121c in sigprocmask ()
</span><br>
<span class="quotelev1">&gt; #1  0x01c46f96 in opal_evsignal_recalc ()
</span><br>
<span class="quotelev1">&gt; #2  0x01c458c2 in opal_event_base_loop ()
</span><br>
<span class="quotelev1">&gt; #3  0x01c45d32 in opal_event_loop ()
</span><br>
<span class="quotelev1">&gt; #4  0x01c3e6f2 in opal_progress ()
</span><br>
<span class="quotelev1">&gt; #5  0x01b6083e in ompi_request_wait_all ()
</span><br>
<span class="quotelev1">&gt; #6  0x01ec68d8 in ompi_coll_tuned_sendrecv_actual ()
</span><br>
<span class="quotelev1">&gt; #7  0x01ecbf64 in ompi_coll_tuned_barrier_intra_bruck ()
</span><br>
<span class="quotelev1">&gt; #8  0x01b75590 in MPI_Barrier ()
</span><br>
<span class="quotelev1">&gt; #9  0x01aec47a in mpi_barrier__ ()
</span><br>
<span class="quotelev1">&gt; #10 0x0011c66c in MAIN_ ()
</span><br>
<span class="quotelev1">&gt; #11 0x002870f9 in main (argc=1, argv=0xbfffe6ec)
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have any suggestions as to what might be happening here? Is there
</span><br>
<span class="quotelev1">&gt; any way to 'tickle' the processes and get them to move on? What if some
</span><br>
<span class="quotelev1">&gt; packets went missing on the network? Surely TCP should take care of this an
</span><br>
<span class="quotelev1">&gt; resend? As implied by my line of questioning, my current thoughts are that
</span><br>
<span class="quotelev1">&gt; some messages between nodes have somehow gone missing. Could this happen? What
</span><br>
<span class="quotelev1">&gt; could cause this? All machines are on the same subnet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sorry my question is so open, but I don't know much about the internals of
</span><br>
<span class="quotelev1">&gt; OpenMPI and how it passes messages and I'm looking for some ideas on where to
</span><br>
<span class="quotelev1">&gt; start searching!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any help or suggestions that you can offer,
</span><br>
<span class="quotelev1">&gt;     Chris
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
<li><strong>Next message:</strong> <a href="3512.php">Terry Frankcombe: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>Previous message:</strong> <a href="3510.php">Gleb Natapov: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="3501.php">Chris Reeves: "[OMPI users] Processes stuck in MPI_BARRIER"</a>
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
