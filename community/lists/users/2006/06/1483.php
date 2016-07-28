<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 28 09:21:23 2006" -->
<!-- isoreceived="20060628132123" -->
<!-- sent="Wed, 28 Jun 2006 15:21:40 +0200" -->
<!-- isosent="20060628132140" -->
<!-- name="openmpi-user" -->
<!-- email="openmpi-user_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 317, Issue 4" -->
<!-- id="44A28264.2070902_at_fraka-mp.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.426.1151499408.3329.users_at_open-mpi.org" -->
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
<strong>From:</strong> openmpi-user (<em>openmpi-user_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-28 09:21:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1484.php">Patrick Jessee: "[OMPI users] Openmpi 1.1: startup problem caused by file descriptor state"</a>
<li><strong>Previous message:</strong> <a href="1482.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] rsh/ssh is work but mpirun hang ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1487.php">Eric Thibodeau: "Re: [OMPI users] users Digest, Vol 317, Issue 4"</a>
<li><strong>Reply:</strong> <a href="1487.php">Eric Thibodeau: "Re: [OMPI users] users Digest, Vol 317, Issue 4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Eric (and all),
<br>
<p>don't know if this really messes things up, but you have set up lam-mpi 
<br>
in your path-variables, too:
<br>
<p>[enterprise:24786] pls:rsh: reset LD_LIBRARY_PATH: /export/lca/home/lca0/etudiants/ac38820/openmpi_sun4u/lib:/export/lca/appl/Forte/SUNWspro/WS6U2/lib:/usr/local/lib:*/usr/local/lam-mpi/7.1.1/lib*:/opt/sfw/lib
<br>
<p><p>Yours,
<br>
Frank
<br>
<p>users-request_at_[hidden] wrote:
<br>
Send users mailing list submissions to
<br>
<span class="quotelev1">&gt; 	users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt; 	<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt; 	users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt; 	users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. Re: Installing OpenMPI on a solaris (Jeff Squyres (jsquyres))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Wed, 28 Jun 2006 08:56:36 -0400
</span><br>
<span class="quotelev1">&gt; From: &quot;Jeff Squyres \(jsquyres\)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Installing OpenMPI on a solaris
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; 	&lt;C835B9C9CB0F1C4E9DA48913C9E8F8AFAE95F7_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bummer!  :-(
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Just to be sure -- you had a clean config.cache file before you ran configure, right?  (e.g., the file didn't exist -- just to be sure it didn't get potentially erroneous values from a previous run of configure)  Also, FWIW, it's not necessary to specify --enable-ltdl-convenience; that should be automatic.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; If you had a clean configure, we *suspect* that this might be due to alignment issues on Solaris 64 bit platforms, but thought that we might have had a pretty good handle on it in 1.1.  Obviously we didn't solve everything.  Bonk.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Did you get a corefile, perchance?  If you could send a stack trace, that would be most helpful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Eric Thibodeau
</span><br>
<span class="quotelev1">&gt; 	Sent: Tuesday, June 20, 2006 8:36 PM
</span><br>
<span class="quotelev1">&gt; 	To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 	Subject: Re: [OMPI users] Installing OpenMPI on a solaris
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Hello Brian (and all),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Well, the joy was short lived. On a 12 CPU Enterprise machine and on a 4 CPU one, I seem to be able to start up to 4 processes. Above 4, I seem to inevitably get BUS_ADRALN (Bus collisions?). Below are some traces of the failling runs as well as a detailed (mpirun -d) of one of these situations and ompi_info output. Obviously, don't hesitate to ask if more information is requred.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Buid version: openmpi-1.1b5r10421
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Config parameters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Open MPI config.status 1.1b5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	configured by ./configure, generated by GNU Autoconf 2.59,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	with options \&quot;'--cache-file=config.cache' 'CFLAGS=-mcpu=v9' 'CXXFLAGS=-mcpu=v9' 'FFLAGS=-mcpu=v9' '--prefix=/export/lca/home/lca0/etudiants/ac38820/openmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	i_sun4u' --enable-ltdl-convenience\&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	The traces:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	sshd_at_enterprise ~/1_Files/1_ETS/1_Maitrise/MGL810/Devoir2 $ ~/openmpi_sun4u/bin/mpirun -np 10 mandelbrot-mpi 100 400 400
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Signal:10 info.si_errno:0(Error 0) si_code:1(BUS_ADRALN)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Failing at addr:2f4f04
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	*** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	sshd_at_enterprise ~/1_Files/1_ETS/1_Maitrise/MGL810/Devoir2 $ ~/openmpi_sun4u/bin/mpirun -np 8 mandelbrot-mpi 100 400 400
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Signal:10 info.si_errno:0(Error 0) si_code:1(BUS_ADRALN)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Failing at addr:2b354c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	*** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	sshd_at_enterprise ~/1_Files/1_ETS/1_Maitrise/MGL810/Devoir2 $ ~/openmpi_sun4u/bin/mpirun -np 6 mandelbrot-mpi 100 400 400
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Signal:10 info.si_errno:0(Error 0) si_code:1(BUS_ADRALN)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Failing at addr:2b1ecc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	*** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	sshd_at_enterprise ~/1_Files/1_ETS/1_Maitrise/MGL810/Devoir2 $ ~/openmpi_sun4u/bin/mpirun -np 5 mandelbrot-mpi 100 400 400
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Signal:10 info.si_errno:0(Error 0) si_code:1(BUS_ADRALN)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Failing at addr:2b12cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	*** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	sshd_at_enterprise ~/1_Files/1_ETS/1_Maitrise/MGL810/Devoir2 $ ~/openmpi_sun4u/bin/mpirun -np 4 mandelbrot-mpi 100 400 400
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	maxiter = 100, width = 400, height = 400
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	execution time in seconds = 1.48
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Taper q pour quitter le programme, autrement, on fait un refresh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	q
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	sshd_at_enterprise ~/1_Files/1_ETS/1_Maitrise/MGL810/Devoir2 $ ~/openmpi_sun4u/bin/mpirun -np 5 mandelbrot-mpi 100 400 400
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Signal:10 info.si_errno:0(Error 0) si_code:1(BUS_ADRALN)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Failing at addr:2b12cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	*** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	I also got the same behaviour on a different machine (with the exact same code base, $HOME is an NFS mount) and same hardware but limited to 4 CPUs. The following is a debug run of such the failling execution:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	sshd_at_enterprise ~/1_Files/1_ETS/1_Maitrise/MGL810/Devoir2 $ ~/openmpi_sun4u/bin/mpirun -d -v -np 5 mandelbrot-mpi 100 400 400
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] universe default-universe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] user sshd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] host enterprise
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] jobid 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] procid 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] procdir: /tmp/openmpi-sessions-sshd_at_enterprise_0/default-universe/0/0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] jobdir: /tmp/openmpi-sessions-sshd_at_enterprise_0/default-universe/0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] unidir: /tmp/openmpi-sessions-sshd_at_enterprise_0/default-universe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] top: openmpi-sessions-sshd_at_enterprise_0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] [0,0,0] contact_file /tmp/openmpi-sessions-sshd_at_enterprise_0/default-universe/universe-setup.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] [0,0,0] wrote setup file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] pls:rsh: local csh: 0, local bash: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] pls:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] pls:rsh: remote csh: 0, remote bash: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] pls:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] pls:rsh: /usr/local/bin/ssh &lt;template&gt; ( ! [ -e ./.profile ] || . ./.profile; orted --debug --bootproxy 1 --name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename &lt;template&gt; --universe sshd_at_enterprise:default-universe --nsreplica &quot;0.0.0;tcp://10.45.117.37:40236&quot; --gprreplica &quot;0.0.0;tcp://10.45.117.37:40236&quot; --mpi-call-yield 0 )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] pls:rsh: launching on node localhost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] pls:rsh: oversubscribed -- setting mpi_yield_when_idle to 1 (1 5)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] pls:rsh: localhost is a LOCAL node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] pls:rsh: reset PATH: /export/lca/home/lca0/etudiants/ac38820/openmpi_sun4u/bin:/bin:/usr/local/bin:/usr/bin:/usr/sbin:/usr/ccs/bin:/usr/dt/bin:/usr/local/lam-mpi/7.1.1/bin:/export/lca/appl/Forte/SUNWspro/WS6U2/bin:/opt/sfw/bin:/usr/bin:/usr/ucb:/etc:/usr/local/bin:.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] pls:rsh: reset LD_LIBRARY_PATH: /export/lca/home/lca0/etudiants/ac38820/openmpi_sun4u/lib:/export/lca/appl/Forte/SUNWspro/WS6U2/lib:/usr/local/lib:/usr/local/lam-mpi/7.1.1/lib:/opt/sfw/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] pls:rsh: changing to directory /export/lca/home/lca0/etudiants/ac38820
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] pls:rsh: executing: orted --debug --bootproxy 1 --name 0.0.1 --num_procs 2 --vpid_start 0 --nodename localhost --universe sshd_at_enterprise:default-universe --nsreplica &quot;0.0.0;tcp://10.45.117.37:40236&quot; --gprreplica &quot;0.0.0;tcp://10.45.117.37:40236&quot; --mpi-call-yield 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] [0,0,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] universe default-universe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] user sshd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] host localhost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] jobid 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] procid 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] procdir: /tmp/openmpi-sessions-sshd_at_localhost_0/default-universe/0/1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] jobdir: /tmp/openmpi-sessions-sshd_at_localhost_0/default-universe/0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] unidir: /tmp/openmpi-sessions-sshd_at_localhost_0/default-universe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] top: openmpi-sessions-sshd_at_localhost_0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24789] [0,1,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24789] universe default-universe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24789] user sshd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24789] host localhost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24789] jobid 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24789] procid 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24789] procdir: /tmp/openmpi-sessions-sshd_at_localhost_0/default-universe/1/0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24789] jobdir: /tmp/openmpi-sessions-sshd_at_localhost_0/default-universe/1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24789] unidir: /tmp/openmpi-sessions-sshd_at_localhost_0/default-universe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24789] top: openmpi-sessions-sshd_at_localhost_0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24789] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24791] [0,1,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24791] universe default-universe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24791] user sshd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24791] host localhost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24791] jobid 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24791] procid 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24791] procdir: /tmp/openmpi-sessions-sshd_at_localhost_0/default-universe/1/1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24791] jobdir: /tmp/openmpi-sessions-sshd_at_localhost_0/default-universe/1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24791] unidir: /tmp/openmpi-sessions-sshd_at_localhost_0/default-universe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24791] top: openmpi-sessions-sshd_at_localhost_0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24791] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24793] [0,1,2] setting up session dir with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24793] universe default-universe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24793] user sshd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24793] host localhost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24793] jobid 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24793] procid 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24793] procdir: /tmp/openmpi-sessions-sshd_at_localhost_0/default-universe/1/2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24793] jobdir: /tmp/openmpi-sessions-sshd_at_localhost_0/default-universe/1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24793] unidir: /tmp/openmpi-sessions-sshd_at_localhost_0/default-universe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24793] top: openmpi-sessions-sshd_at_localhost_0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24793] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24795] [0,1,3] setting up session dir with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24795] universe default-universe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24795] user sshd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24795] host localhost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24795] jobid 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24795] procid 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24795] procdir: /tmp/openmpi-sessions-sshd_at_localhost_0/default-universe/1/3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24795] jobdir: /tmp/openmpi-sessions-sshd_at_localhost_0/default-universe/1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24795] unidir: /tmp/openmpi-sessions-sshd_at_localhost_0/default-universe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24795] top: openmpi-sessions-sshd_at_localhost_0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24795] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24797] [0,1,4] setting up session dir with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24797] universe default-universe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24797] user sshd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24797] host localhost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24797] jobid 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24797] procid 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24797] procdir: /tmp/openmpi-sessions-sshd_at_localhost_0/default-universe/1/4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24797] jobdir: /tmp/openmpi-sessions-sshd_at_localhost_0/default-universe/1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24797] unidir: /tmp/openmpi-sessions-sshd_at_localhost_0/default-universe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24797] top: openmpi-sessions-sshd_at_localhost_0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24797] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] spawn: in job_state_callback(jobid = 1, state = 0x4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24786] Info: Setting up debugger process table for applications
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MPIR_debug_gate = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MPIR_acquired_pre_main = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MPIR_proctable_size = 5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	(i, host, exe, pid) = (0, localhost, mandelbrot-mpi, 24789)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	(i, host, exe, pid) = (1, localhost, mandelbrot-mpi, 24791)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	(i, host, exe, pid) = (2, localhost, mandelbrot-mpi, 24793)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	(i, host, exe, pid) = (3, localhost, mandelbrot-mpi, 24795)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	(i, host, exe, pid) = (4, localhost, mandelbrot-mpi, 24797)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24789] [0,1,0] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24791] [0,1,1] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24793] [0,1,2] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24795] [0,1,3] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24797] [0,1,4] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Signal:10 info.si_errno:0(Error 0) si_code:1(BUS_ADRALN)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Failing at addr:2b12cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	*** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] sess_dir_finalize: found proc session dir empty - deleting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] orted: job_state_callback(jobid = 1, state = ORTE_PROC_STATE_ABORTED)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] sess_dir_finalize: found job session dir empty - deleting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] sess_dir_finalize: univ session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Host: enterprise
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	PID: 24789
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Host: enterprise
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	PID: 24791
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Host: enterprise
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	PID: 24793
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Host: enterprise
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	PID: 24795
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Host: enterprise
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	PID: 24797
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Host: enterprise
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	PID: 24789
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Host: enterprise
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	PID: 24791
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Host: enterprise
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	PID: 24793
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Host: enterprise
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	PID: 24795
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Host: enterprise
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	PID: 24797
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] orted: job_state_callback(jobid = 1, state = ORTE_PROC_STATE_TERMINATED)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] sess_dir_finalize: found proc session dir empty - deleting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] sess_dir_finalize: found job session dir empty - deleting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] sess_dir_finalize: found univ session dir empty - deleting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	[enterprise:24787] sess_dir_finalize: found top session dir empty - deleting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	ompi_info output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	sshd_at_enterprise ~ $ ~/openmpi_sun4u/bin/ompi_info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Open MPI: 1.1b5r10421
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Open MPI SVN revision: r10421
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Open RTE: 1.1b5r10421
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Open RTE SVN revision: r10421
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	OPAL: 1.1b5r10421
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	OPAL SVN revision: r10421
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Prefix: /export/lca/home/lca0/etudiants/ac38820/openmpi_sun4u
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Configured architecture: sparc-sun-solaris2.8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Configured by: sshd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Configured on: Tue Jun 20 15:25:44 EDT 2006
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Configure host: averoes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Built by: ac38820
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Built on: Tue Jun 20 15:59:47 EDT 2006
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Built host: averoes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	C bindings: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Fortran90 bindings size: na
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	C compiler: gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	C compiler absolute: /usr/local/bin/gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	C++ compiler absolute: /usr/local/bin/g++
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Fortran77 compiler: g77
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Fortran77 compiler abs: /usr/local/bin/g77
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Fortran90 compiler: f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Fortran90 compiler abs: /export/lca/appl/Forte/SUNWspro/WS6U2/bin/f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	C profiling: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Thread support: solaris (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Internal debug support: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Memory profiling support: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	libltdl support: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA paffinity: solaris (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA timer: solaris (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA coll: basic (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA coll: hierarch (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA coll: self (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA coll: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA coll: tuned (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA io: romio (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA mpool: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA pml: dr (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA bml: r2 (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA rcache: rb (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA btl: self (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA btl: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA topo: unity (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA gpr: null (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA gpr: replica (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA iof: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA iof: svc (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA ns: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA ns: replica (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA ras: localhost (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA rds: resfile (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA rmaps: round_robin (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA rml: oob (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA pls: fork (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA pls: rsh (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA sds: env (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA sds: pipe (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA sds: seed (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MCA sds: singleton (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Le mardi 20 juin 2006 17:06, Eric Thibodeau a ?crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; 	&gt; Thanks for the pointer, it WORKS!! (yay)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; 	&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; 	&gt; Le mardi 20 juin 2006 12:21, Brian Barrett a ?crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; 	&gt; &gt; On Jun 19, 2006, at 12:15 PM, Eric Thibodeau wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; 	&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt; 	&gt; &gt; &gt; I checked the thread with the same title as this e-mail and tried 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt; 	&gt; &gt; &gt; compiling openmpi-1.1b4r10418 with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt; 	&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt; 	&gt; &gt; &gt; ./configure CFLAGS=&quot;-mv8plus&quot; CXXFLAGS=&quot;-mv8plus&quot; FFLAGS=&quot;-mv8plus&quot; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt; 	&gt; &gt; &gt; FCFLAGS=&quot;-mv8plus&quot; --prefix=$HOME/openmpi-SUN-`uname -r` --enable- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt; 	&gt; &gt; &gt; pretty-print-stacktrace
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; 	&gt; &gt; I put the incorrect flags in the error message - can you try again with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; 	&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; 	&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; 	&gt; &gt; ./configure CFLAGS=-mcpu=v9 CXXFLAGS=-mcpu=v9 FFLAGS=-mcpu=v9 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; 	&gt; &gt; FCFLAGS=-mcpu=v9 --prefix=$HOME/openmpi-SUN-`uname -r` --enable- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; 	&gt; &gt; pretty-print-stacktrace
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; 	&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; 	&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; 	&gt; &gt; and see if that helps? By the way, I'm not sure if Solaris has the 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; 	&gt; &gt; required support for the pretty-print stack trace feature. It likely 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; 	&gt; &gt; will print what signal caused the error, but will not actually print 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; 	&gt; &gt; the stack trace. It's enabled by default on Solaris, with this 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; 	&gt; &gt; limited functionality (the option exists for platforms that have 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; 	&gt; &gt; broken half-support for GNU libc's stack trace feature, and for users 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; 	&gt; &gt; that don't like us registering a signal handler to do the work).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; 	&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; 	&gt; &gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; 	&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; 	&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; 	&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	-- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Eric Thibodeau
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Neural Bucket Solutions Inc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	T. (514) 736-1436
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	C. (514) 710-0517
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; End of users Digest, Vol 317, Issue 4
</span><br>
<span class="quotelev1">&gt; *************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1483/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1484.php">Patrick Jessee: "[OMPI users] Openmpi 1.1: startup problem caused by file descriptor state"</a>
<li><strong>Previous message:</strong> <a href="1482.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] rsh/ssh is work but mpirun hang ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1487.php">Eric Thibodeau: "Re: [OMPI users] users Digest, Vol 317, Issue 4"</a>
<li><strong>Reply:</strong> <a href="1487.php">Eric Thibodeau: "Re: [OMPI users] users Digest, Vol 317, Issue 4"</a>
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
