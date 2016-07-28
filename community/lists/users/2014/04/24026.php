<?
$subject_val = "Re: [OMPI users] usNIC point-to-point messaging module";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 13:13:53 2014" -->
<!-- isoreceived="20140401171353" -->
<!-- sent="Tue, 1 Apr 2014 18:13:46 +0100" -->
<!-- isosent="20140401171346" -->
<!-- name="Filippo Spiga" -->
<!-- email="spiga.filippo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] usNIC point-to-point messaging module" -->
<!-- id="F760F545-E86F-4B37-8846-9DDEF4D61C44_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7EB749B7-DD09-4123-959E-A26F6A6F969B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] usNIC point-to-point messaging module<br>
<strong>From:</strong> Filippo Spiga (<em>spiga.filippo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-01 13:13:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24027.php">Dave Goodell (dgoodell): "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<li><strong>Previous message:</strong> <a href="24025.php">Dave Goodell (dgoodell): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23948.php">Jeff Squyres (jsquyres): "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24027.php">Dave Goodell (dgoodell): "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<li><strong>Reply:</strong> <a href="24027.php">Dave Goodell (dgoodell): "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Ralph, Dear Jeff,
<br>
<p>I've just recompiled the latest Open MPI 1.8. I added &quot;--enable-mca-no-build=btl-usnic&quot; to configure but the message still appear. Here the output of &quot;--mca btl_base_verbose 100&quot; (trunked immediately after the application starts)
<br>
<p><p>srun: cluster configuration lacks support for cpu binding
<br>
[tesla88:26769] mca: base: components_register: registering btl components
<br>
[tesla88:26769] mca: base: components_register: found loaded component openib
<br>
[tesla88:26768] mca: base: components_register: registering btl components
<br>
[tesla88:26768] mca: base: components_register: found loaded component openib
<br>
[tesla88:26768] mca: base: components_register: component openib register function successful
<br>
[tesla88:26769] mca: base: components_register: component openib register function successful
<br>
[tesla88:26769] mca: base: components_register: found loaded component self
<br>
[tesla88:26768] mca: base: components_register: found loaded component self
<br>
[tesla88:26769] mca: base: components_register: component self register function successful
<br>
[tesla88:26768] mca: base: components_register: component self register function successful
<br>
[tesla88:26769] mca: base: components_register: found loaded component sm
<br>
[tesla88:26768] mca: base: components_register: found loaded component sm
<br>
[tesla88:26769] mca: base: components_register: component sm register function successful
<br>
[tesla88:26768] mca: base: components_register: component sm register function successful
<br>
[tesla88:26769] mca: base: components_register: found loaded component tcp
<br>
[tesla88:26768] mca: base: components_register: found loaded component tcp
<br>
[tesla88:26769] mca: base: components_register: component tcp register function successful
<br>
[tesla88:26768] mca: base: components_register: component tcp register function successful
<br>
[tesla88:26769] mca: base: components_register: found loaded component usnic
<br>
[tesla88:26768] mca: base: components_register: found loaded component usnic
<br>
[tesla88:26769] mca: base: components_register: component usnic register function successful
<br>
[tesla88:26768] mca: base: components_register: component usnic register function successful
<br>
[tesla88:26769] mca: base: components_register: found loaded component vader
<br>
[tesla88:26768] mca: base: components_register: found loaded component vader
<br>
[tesla88:26769] mca: base: components_register: component vader register function successful
<br>
[tesla88:26769] mca: base: components_open: opening btl components
<br>
[tesla88:26769] mca: base: components_open: found loaded component openib
<br>
[tesla88:26769] mca: base: components_open: component openib open function successful
<br>
[tesla88:26769] mca: base: components_open: found loaded component self
<br>
[tesla88:26768] mca: base: components_register: component vader register function successful
<br>
[tesla88:26769] mca: base: components_open: component self open function successful
<br>
[tesla88:26769] mca: base: components_open: found loaded component sm
<br>
[tesla88:26769] mca: base: components_open: component sm open function successful
<br>
[tesla88:26769] mca: base: components_open: found loaded component tcp
<br>
[tesla88:26768] mca: base: components_open: opening btl components
<br>
[tesla88:26768] mca: base: components_open: found loaded component openib
<br>
[tesla88:26768] mca: base: components_open: component openib open function successful
<br>
[tesla88:26768] mca: base: components_open: found loaded component self
<br>
[tesla88:26768] mca: base: components_open: component self open function successful
<br>
[tesla88:26768] mca: base: components_open: found loaded component sm
<br>
[tesla88:26768] mca: base: components_open: component sm open function successful
<br>
[tesla88:26768] mca: base: components_open: found loaded component tcp
<br>
[tesla88:26769] mca: base: components_open: component tcp open function successful
<br>
[tesla88:26769] mca: base: components_open: found loaded component usnic
<br>
[tesla88:26769] mca: base: components_open: component usnic open function successful
<br>
[tesla88:26769] mca: base: components_open: found loaded component vader
<br>
[tesla88:26769] mca: base: components_open: component vader open function successful
<br>
[tesla89:45456] mca: base: components_register: registering btl components
<br>
[tesla89:45456] mca: base: components_register: found loaded component openib
<br>
[tesla88:26768] mca: base: components_open: component tcp open function successful
<br>
[tesla88:26768] mca: base: components_open: found loaded component usnic
<br>
[tesla88:26768] mca: base: components_open: component usnic open function successful
<br>
[tesla88:26768] mca: base: components_open: found loaded component vader
<br>
[tesla88:26768] mca: base: components_open: component vader open function successful
<br>
[tesla89:45455] mca: base: components_register: registering btl components
<br>
[tesla89:45455] mca: base: components_register: found loaded component openib
<br>
[tesla89:45456] mca: base: components_register: component openib register function successful
<br>
[tesla89:45456] mca: base: components_register: found loaded component self
<br>
[tesla89:45456] mca: base: components_register: component self register function successful
<br>
[tesla89:45456] mca: base: components_register: found loaded component sm
<br>
[tesla89:45455] mca: base: components_register: component openib register function successful
<br>
[tesla89:45455] mca: base: components_register: found loaded component self
<br>
[tesla89:45456] mca: base: components_register: component sm register function successful
<br>
[tesla89:45456] mca: base: components_register: found loaded component tcp
<br>
[tesla89:45455] mca: base: components_register: component self register function successful
<br>
[tesla89:45455] mca: base: components_register: found loaded component sm
<br>
[tesla89:45456] mca: base: components_register: component tcp register function successful
<br>
[tesla89:45456] mca: base: components_register: found loaded component usnic
<br>
[tesla89:45455] mca: base: components_register: component sm register function successful
<br>
[tesla89:45455] mca: base: components_register: found loaded component tcp
<br>
[tesla89:45456] mca: base: components_register: component usnic register function successful
<br>
[tesla89:45456] mca: base: components_register: found loaded component vader
<br>
[tesla89:45455] mca: base: components_register: component tcp register function successful
<br>
[tesla89:45456] mca: base: components_register: component vader register function successful
<br>
[tesla89:45456] mca: base: components_open: opening btl components
<br>
[tesla89:45456] mca: base: components_open: found loaded component openib
<br>
[tesla89:45456] mca: base: components_open: component openib open function successful
<br>
[tesla89:45455] mca: base: components_register: found loaded component usnic
<br>
[tesla89:45456] mca: base: components_open: found loaded component self
<br>
[tesla89:45456] mca: base: components_open: component self open function successful
<br>
[tesla89:45456] mca: base: components_open: found loaded component sm
<br>
[tesla89:45456] mca: base: components_open: component sm open function successful
<br>
[tesla89:45456] mca: base: components_open: found loaded component tcp
<br>
[tesla89:45456] mca: base: components_open: component tcp open function successful
<br>
[tesla89:45456] mca: base: components_open: found loaded component usnic
<br>
[tesla89:45456] mca: base: components_open: component usnic open function successful
<br>
[tesla89:45456] mca: base: components_open: found loaded component vader
<br>
[tesla89:45456] mca: base: components_open: component vader open function successful
<br>
[tesla89:45455] mca: base: components_register: component usnic register function successful
<br>
[tesla89:45455] mca: base: components_register: found loaded component vader
<br>
[tesla90:07900] mca: base: components_register: registering btl components
<br>
[tesla90:07900] mca: base: components_register: found loaded component openib
<br>
[tesla90:07899] mca: base: components_register: registering btl components
<br>
[tesla90:07899] mca: base: components_register: found loaded component openib
<br>
[tesla89:45455] mca: base: components_register: component vader register function successful
<br>
[tesla89:45455] mca: base: components_open: opening btl components
<br>
[tesla89:45455] mca: base: components_open: found loaded component openib
<br>
[tesla89:45455] mca: base: components_open: component openib open function successful
<br>
[tesla89:45455] mca: base: components_open: found loaded component self
<br>
[tesla89:45455] mca: base: components_open: component self open function successful
<br>
[tesla89:45455] mca: base: components_open: found loaded component sm
<br>
[tesla89:45455] mca: base: components_open: component sm open function successful
<br>
[tesla89:45455] mca: base: components_open: found loaded component tcp
<br>
[tesla89:45455] mca: base: components_open: component tcp open function successful
<br>
[tesla89:45455] mca: base: components_open: found loaded component usnic
<br>
[tesla89:45455] mca: base: components_open: component usnic open function successful
<br>
[tesla89:45455] mca: base: components_open: found loaded component vader
<br>
[tesla89:45455] mca: base: components_open: component vader open function successful
<br>
[tesla90:07900] mca: base: components_register: component openib register function successful
<br>
[tesla90:07900] mca: base: components_register: found loaded component self
<br>
[tesla90:07899] mca: base: components_register: component openib register function successful
<br>
[tesla90:07900] mca: base: components_register: component self register function successful
<br>
[tesla90:07900] mca: base: components_register: found loaded component sm
<br>
[tesla90:07899] mca: base: components_register: found loaded component self
<br>
[tesla90:07900] mca: base: components_register: component sm register function successful
<br>
[tesla90:07899] mca: base: components_register: component self register function successful
<br>
[tesla90:07900] mca: base: components_register: found loaded component tcp
<br>
[tesla90:07899] mca: base: components_register: found loaded component sm
<br>
[tesla90:07900] mca: base: components_register: component tcp register function successful
<br>
[tesla90:07899] mca: base: components_register: component sm register function successful
<br>
[tesla90:07900] mca: base: components_register: found loaded component usnic
<br>
[tesla90:07899] mca: base: components_register: found loaded component tcp
<br>
[tesla90:07900] mca: base: components_register: component usnic register function successful
<br>
[tesla90:07900] mca: base: components_register: found loaded component vader
<br>
[tesla90:07899] mca: base: components_register: component tcp register function successful
<br>
[tesla90:07899] mca: base: components_register: found loaded component usnic
<br>
[tesla90:07900] mca: base: components_register: component vader register function successful
<br>
[tesla90:07900] mca: base: components_open: opening btl components
<br>
[tesla90:07900] mca: base: components_open: found loaded component openib
<br>
[tesla90:07900] mca: base: components_open: component openib open function successful
<br>
[tesla90:07900] mca: base: components_open: found loaded component self
<br>
[tesla90:07900] mca: base: components_open: component self open function successful
<br>
[tesla90:07900] mca: base: components_open: found loaded component sm
<br>
[tesla90:07900] mca: base: components_open: component sm open function successful
<br>
[tesla90:07900] mca: base: components_open: found loaded component tcp
<br>
[tesla90:07900] mca: base: components_open: component tcp open function successful
<br>
[tesla90:07900] mca: base: components_open: found loaded component usnic
<br>
[tesla90:07900] mca: base: components_open: component usnic open function successful
<br>
[tesla90:07900] mca: base: components_open: found loaded component vader
<br>
[tesla90:07900] mca: base: components_open: component vader open function successful
<br>
[tesla90:07899] mca: base: components_register: component usnic register function successful
<br>
[tesla90:07899] mca: base: components_register: found loaded component vader
<br>
[tesla90:07899] mca: base: components_register: component vader register function successful
<br>
[tesla90:07899] mca: base: components_open: opening btl components
<br>
[tesla90:07899] mca: base: components_open: found loaded component openib
<br>
[tesla90:07899] mca: base: components_open: component openib open function successful
<br>
[tesla90:07899] mca: base: components_open: found loaded component self
<br>
[tesla90:07899] mca: base: components_open: component self open function successful
<br>
[tesla90:07899] mca: base: components_open: found loaded component sm
<br>
[tesla90:07899] mca: base: components_open: component sm open function successful
<br>
[tesla90:07899] mca: base: components_open: found loaded component tcp
<br>
[tesla90:07899] mca: base: components_open: component tcp open function successful
<br>
[tesla90:07899] mca: base: components_open: found loaded component usnic
<br>
[tesla90:07899] mca: base: components_open: component usnic open function successful
<br>
[tesla90:07899] mca: base: components_open: found loaded component vader
<br>
[tesla90:07899] mca: base: components_open: component vader open function successful
<br>
[tesla91:34788] mca: base: components_register: registering btl components
<br>
[tesla91:34788] mca: base: components_register: found loaded component openib
<br>
[tesla91:34787] mca: base: components_register: registering btl components
<br>
[tesla91:34787] mca: base: components_register: found loaded component openib
<br>
[tesla91:34788] mca: base: components_register: component openib register function successful
<br>
[tesla91:34788] mca: base: components_register: found loaded component self
<br>
[tesla91:34788] mca: base: components_register: component self register function successful
<br>
[tesla91:34788] mca: base: components_register: found loaded component sm
<br>
[tesla91:34787] mca: base: components_register: component openib register function successful
<br>
[tesla91:34787] mca: base: components_register: found loaded component self
<br>
[tesla91:34788] mca: base: components_register: component sm register function successful
<br>
[tesla91:34787] mca: base: components_register: component self register function successful
<br>
[tesla91:34787] mca: base: components_register: found loaded component sm
<br>
[tesla91:34788] mca: base: components_register: found loaded component tcp
<br>
[tesla91:34787] mca: base: components_register: component sm register function successful
<br>
[tesla91:34787] mca: base: components_register: found loaded component tcp
<br>
[tesla91:34788] mca: base: components_register: component tcp register function successful
<br>
[tesla91:34788] mca: base: components_register: found loaded component usnic
<br>
[tesla91:34788] mca: base: components_register: component usnic register function successful
<br>
[tesla91:34787] mca: base: components_register: component tcp register function successful
<br>
[tesla91:34788] mca: base: components_register: found loaded component vader
<br>
[tesla91:34787] mca: base: components_register: found loaded component usnic
<br>
[tesla91:34788] mca: base: components_register: component vader register function successful
<br>
[tesla91:34788] mca: base: components_open: opening btl components
<br>
[tesla91:34788] mca: base: components_open: found loaded component openib
<br>
[tesla91:34788] mca: base: components_open: component openib open function successful
<br>
[tesla91:34788] mca: base: components_open: found loaded component self
<br>
[tesla91:34788] mca: base: components_open: component self open function successful
<br>
[tesla91:34788] mca: base: components_open: found loaded component sm
<br>
[tesla91:34788] mca: base: components_open: component sm open function successful
<br>
[tesla91:34788] mca: base: components_open: found loaded component tcp
<br>
[tesla91:34788] mca: base: components_open: component tcp open function successful
<br>
[tesla91:34788] mca: base: components_open: found loaded component usnic
<br>
[tesla91:34788] mca: base: components_open: component usnic open function successful
<br>
[tesla91:34788] mca: base: components_open: found loaded component vader
<br>
[tesla91:34788] mca: base: components_open: component vader open function successful
<br>
[tesla91:34787] mca: base: components_register: component usnic register function successful
<br>
[tesla91:34787] mca: base: components_register: found loaded component vader
<br>
[tesla91:34787] mca: base: components_register: component vader register function successful
<br>
[tesla91:34787] mca: base: components_open: opening btl components
<br>
[tesla91:34787] mca: base: components_open: found loaded component openib
<br>
[tesla91:34787] mca: base: components_open: component openib open function successful
<br>
[tesla91:34787] mca: base: components_open: found loaded component self
<br>
[tesla91:34787] mca: base: components_open: component self open function successful
<br>
[tesla91:34787] mca: base: components_open: found loaded component sm
<br>
[tesla91:34787] mca: base: components_open: component sm open function successful
<br>
[tesla91:34787] mca: base: components_open: found loaded component tcp
<br>
[tesla91:34787] mca: base: components_open: component tcp open function successful
<br>
[tesla91:34787] mca: base: components_open: found loaded component usnic
<br>
[tesla91:34787] mca: base: components_open: component usnic open function successful
<br>
[tesla91:34787] mca: base: components_open: found loaded component vader
<br>
[tesla91:34787] mca: base: components_open: component vader open function successful
<br>
[tesla88:26769] select: initializing btl component openib
<br>
[tesla88:26768] select: initializing btl component openib
<br>
[tesla89:45456] select: initializing btl component openib
<br>
[tesla89:45455] select: initializing btl component openib
<br>
[tesla90:07900] select: initializing btl component openib
<br>
[tesla90:07899] select: initializing btl component openib
<br>
[tesla91:34788] select: initializing btl component openib
<br>
[tesla91:34787] select: initializing btl component openib
<br>
[tesla89:45455] openib BTL: rdmacm CPC available for use on mlx5_0:1
<br>
[tesla89:45456] openib BTL: rdmacm IP address not found on port
<br>
[tesla89:45456] openib BTL: rdmacm CPC unavailable for use on mlx5_1:1; skipped
<br>
[tesla88:26769] openib BTL: rdmacm IP address not found on port
<br>
[tesla88:26769] openib BTL: rdmacm CPC unavailable for use on mlx5_1:1; skipped
<br>
[tesla88:26768] openib BTL: rdmacm CPC available for use on mlx5_0:1
<br>
[tesla90:07900] openib BTL: rdmacm IP address not found on port
<br>
[tesla90:07900] openib BTL: rdmacm CPC unavailable for use on mlx5_1:1; skipped
<br>
[tesla90:07899] openib BTL: rdmacm CPC available for use on mlx5_0:1
<br>
[tesla89:45455] select: init of component openib returned success
<br>
[tesla89:45455] select: initializing btl component self
<br>
[tesla89:45455] select: init of component self returned success
<br>
[tesla89:45455] select: initializing btl component sm
<br>
[tesla89:45455] select: init of component sm returned success
<br>
[tesla89:45455] select: initializing btl component tcp
<br>
[tesla89:45455] btl: tcp: Searching for exclude address+prefix: 127.0.0.1 / 8
<br>
[tesla89:45455] btl: tcp: Found match: 127.0.0.1 (lo)
<br>
[tesla89:45455] select: init of component tcp returned success
<br>
[tesla89:45455] select: initializing btl component usnic
<br>
[tesla89:45456] select: init of component openib returned success
<br>
[tesla89:45456] select: initializing btl component self
<br>
[tesla89:45456] select: init of component self returned success
<br>
[tesla89:45456] select: initializing btl component sm
<br>
[tesla89:45456] select: init of component sm returned success
<br>
[tesla89:45456] select: initializing btl component tcp
<br>
[tesla88:26769] select: init of component openib returned success
<br>
[tesla88:26769] select: initializing btl component self
<br>
[tesla88:26769] select: init of component self returned success
<br>
[tesla88:26769] select: initializing btl component sm
<br>
[tesla88:26769] select: init of component sm returned success
<br>
[tesla89:45455] usNIC connectivity agent initialized
<br>
[tesla89:45455] usNIC connectivity client initialized
<br>
[tesla88:26769] select: initializing btl component tcp
<br>
[tesla89:45456] btl: tcp: Searching for exclude address+prefix: 127.0.0.1 / 8
<br>
[tesla89:45456] btl: tcp: Found match: 127.0.0.1 (lo)
<br>
[tesla88:26769] btl: tcp: Searching for exclude address+prefix: 127.0.0.1 / 8
<br>
[tesla88:26769] btl: tcp: Found match: 127.0.0.1 (lo)
<br>
[tesla89:45455] found 2 verbs interfaces
<br>
[tesla89:45456] select: init of component tcp returned success
<br>
[tesla89:45456] select: initializing btl component usnic
<br>
[tesla88:26768] select: init of component openib returned success
<br>
[tesla88:26768] select: initializing btl component self
<br>
[tesla88:26768] select: init of component self returned success
<br>
[tesla88:26768] select: initializing btl component sm
<br>
[tesla88:26769] select: init of component tcp returned success
<br>
[tesla88:26769] select: initializing btl component usnic
<br>
[tesla89:45455] examining verbs interface: mlx5_1
<br>
[tesla89:45456] usNIC connectivity client initialized
<br>
[tesla88:26769] usNIC connectivity client initialized
<br>
[tesla89:45456] found 2 verbs interfaces
<br>
[tesla89:45456] examining verbs interface: mlx5_1
<br>
[tesla88:26769] found 2 verbs interfaces
<br>
[tesla88:26769] examining verbs interface: mlx5_1
<br>
[tesla88:26768] select: init of component sm returned success
<br>
[tesla88:26768] select: initializing btl component tcp
<br>
[tesla88:26768] btl: tcp: Searching for exclude address+prefix: 127.0.0.1 / 8
<br>
[tesla88:26768] btl: tcp: Found match: 127.0.0.1 (lo)
<br>
[tesla91:34788] openib BTL: rdmacm IP address not found on port
<br>
[tesla91:34788] openib BTL: rdmacm CPC unavailable for use on mlx5_1:1; skipped
<br>
[tesla91:34787] openib BTL: rdmacm CPC available for use on mlx5_0:1
<br>
[tesla88:26768] select: init of component tcp returned success
<br>
[tesla88:26768] select: initializing btl component usnic
<br>
[tesla88:26768] usNIC connectivity agent initialized
<br>
[tesla88:26768] usNIC connectivity client initialized
<br>
[tesla88:26768] found 2 verbs interfaces
<br>
[tesla88:26768] examining verbs interface: mlx5_1
<br>
[tesla90:07900] select: init of component openib returned success
<br>
[tesla90:07900] select: initializing btl component self
<br>
[tesla90:07900] select: init of component self returned success
<br>
[tesla90:07900] select: initializing btl component sm
<br>
[tesla90:07900] select: init of component sm returned success
<br>
[tesla90:07900] select: initializing btl component tcp
<br>
[tesla90:07899] select: init of component openib returned success
<br>
[tesla90:07899] select: initializing btl component self
<br>
[tesla90:07900] btl: tcp: Searching for exclude address+prefix: 127.0.0.1 / 8
<br>
[tesla90:07900] btl: tcp: Found match: 127.0.0.1 (lo)
<br>
[tesla90:07899] select: init of component self returned success
<br>
[tesla90:07899] select: initializing btl component sm
<br>
[tesla90:07900] select: init of component tcp returned success
<br>
[tesla90:07900] select: initializing btl component usnic
<br>
[tesla90:07900] usNIC connectivity client initialized
<br>
[tesla90:07899] select: init of component sm returned success
<br>
[tesla90:07899] select: initializing btl component tcp
<br>
[tesla90:07900] found 2 verbs interfaces
<br>
[tesla90:07900] examining verbs interface: mlx5_1
<br>
[tesla90:07899] btl: tcp: Searching for exclude address+prefix: 127.0.0.1 / 8
<br>
[tesla90:07899] btl: tcp: Found match: 127.0.0.1 (lo)
<br>
[tesla90:07899] select: init of component tcp returned success
<br>
[tesla90:07899] select: initializing btl component usnic
<br>
[tesla88:26769] examining verbs interface: mlx5_0
<br>
[tesla90:07899] usNIC connectivity agent initialized
<br>
[tesla90:07899] usNIC connectivity client initialized
<br>
[tesla90:07899] found 2 verbs interfaces
<br>
[tesla89:45455] examining verbs interface: mlx5_0
<br>
[tesla89:45456] examining verbs interface: mlx5_0
<br>
[tesla90:07899] examining verbs interface: mlx5_1
<br>
[tesla88:26768] examining verbs interface: mlx5_0
<br>
[tesla91:34787] select: init of component openib returned success
<br>
[tesla91:34787] select: initializing btl component self
<br>
[tesla91:34787] select: init of component self returned success
<br>
[tesla91:34787] select: initializing btl component sm
<br>
[tesla91:34788] select: init of component openib returned success
<br>
[tesla91:34788] select: initializing btl component self
<br>
[tesla91:34788] select: init of component self returned success
<br>
[tesla91:34788] select: initializing btl component sm
<br>
[tesla91:34788] select: init of component sm returned success
<br>
[tesla91:34788] select: initializing btl component tcp
<br>
[tesla91:34787] select: init of component sm returned success
<br>
[tesla91:34787] select: initializing btl component tcp
<br>
[tesla91:34788] btl: tcp: Searching for exclude address+prefix: 127.0.0.1 / 8
<br>
[tesla91:34788] btl: tcp: Found match: 127.0.0.1 (lo)
<br>
[tesla91:34787] btl: tcp: Searching for exclude address+prefix: 127.0.0.1 / 8
<br>
[tesla91:34787] btl: tcp: Found match: 127.0.0.1 (lo)
<br>
[tesla91:34788] select: init of component tcp returned success
<br>
[tesla91:34788] select: initializing btl component usnic
<br>
[tesla91:34788] usNIC connectivity client initialized
<br>
[tesla91:34787] select: init of component tcp returned success
<br>
[tesla91:34787] select: initializing btl component usnic
<br>
[tesla91:34788] found 2 verbs interfaces
<br>
[tesla91:34788] examining verbs interface: mlx5_1
<br>
[tesla91:34787] usNIC connectivity agent initialized
<br>
[tesla91:34787] usNIC connectivity client initialized
<br>
[tesla91:34787] found 2 verbs interfaces
<br>
[tesla91:34787] examining verbs interface: mlx5_1
<br>
[tesla88:26769] found 2 verbs interfaces
<br>
[tesla88:26769] examining verbs interface: mlx5_1
<br>
[tesla90:07900] examining verbs interface: mlx5_0
<br>
[tesla90:07899] examining verbs interface: mlx5_0
<br>
[tesla88:26768] found 2 verbs interfaces
<br>
[tesla88:26768] examining verbs interface: mlx5_1
<br>
[tesla89:45455] found 2 verbs interfaces
<br>
[tesla89:45455] examining verbs interface: mlx5_1
<br>
[tesla89:45456] found 2 verbs interfaces
<br>
[tesla89:45456] examining verbs interface: mlx5_1
<br>
[tesla88:26769] examining verbs interface: mlx5_0
<br>
[tesla91:34788] examining verbs interface: mlx5_0
<br>
[tesla90:07900] found 2 verbs interfaces
<br>
[tesla90:07900] examining verbs interface: mlx5_1
<br>
[tesla91:34787] examining verbs interface: mlx5_0
<br>
[tesla90:07899] found 2 verbs interfaces
<br>
[tesla90:07899] examining verbs interface: mlx5_1
<br>
[tesla88:26768] examining verbs interface: mlx5_0
<br>
[tesla89:45455] examining verbs interface: mlx5_0
<br>
[tesla89:45456] examining verbs interface: mlx5_0
<br>
[tesla91:34788] found 2 verbs interfaces
<br>
[tesla91:34788] examining verbs interface: mlx5_1
<br>
[tesla90:07900] examining verbs interface: mlx5_0
<br>
[tesla88:26769] select: init of component usnic returned failure
<br>
[tesla91:34787] found 2 verbs interfaces
<br>
[tesla91:34787] examining verbs interface: mlx5_1
<br>
[tesla88:26769] mca: base: close: component usnic closed
<br>
[tesla88:26769] mca: base: close: unloading component usnic
<br>
[tesla88:26769] select: initializing btl component vader
<br>
[tesla90:07899] examining verbs interface: mlx5_0
<br>
[tesla88:26769] select: init of component vader returned success
<br>
[tesla88:26768] select: init of component usnic returned failure
<br>
[tesla88:26768] usNIC connectivity client finalized
<br>
[tesla88:26768] mca: base: close: component usnic closed
<br>
[tesla88:26768] mca: base: close: unloading component usnic
<br>
[tesla88:26768] select: initializing btl component vader
<br>
[tesla88:26768] select: init of component vader returned success
<br>
[tesla89:45455] select: init of component usnic returned failure
<br>
[tesla89:45455] usNIC connectivity client finalized
<br>
[tesla89:45456] select: init of component usnic returned failure
<br>
[tesla89:45456] mca: base: close: component usnic closed
<br>
[tesla89:45456] mca: base: close: unloading component usnic
<br>
[tesla89:45455] mca: base: close: component usnic closed
<br>
[tesla89:45455] mca: base: close: unloading component usnic
<br>
[tesla89:45456] select: initializing btl component vader
<br>
[tesla89:45455] select: initializing btl component vader
<br>
[tesla89:45455] select: init of component vader returned success
<br>
[tesla89:45456] select: init of component vader returned success
<br>
[tesla91:34788] examining verbs interface: mlx5_0
<br>
[tesla91:34787] examining verbs interface: mlx5_0
<br>
[tesla90:07900] select: init of component usnic returned failure
<br>
[tesla90:07900] mca: base: close: component usnic closed
<br>
[tesla90:07900] mca: base: close: unloading component usnic
<br>
[tesla90:07900] select: initializing btl component vader
<br>
[tesla90:07899] select: init of component usnic returned failure
<br>
[tesla90:07899] usNIC connectivity client finalized
<br>
[tesla90:07900] select: init of component vader returned success
<br>
[tesla90:07899] mca: base: close: component usnic closed
<br>
[tesla90:07899] mca: base: close: unloading component usnic
<br>
[tesla90:07899] select: initializing btl component vader
<br>
[tesla90:07899] select: init of component vader returned success
<br>
[tesla91:34788] select: init of component usnic returned failure
<br>
[tesla91:34788] mca: base: close: component usnic closed
<br>
[tesla91:34788] mca: base: close: unloading component usnic
<br>
[tesla91:34787] select: init of component usnic returned failure
<br>
[tesla91:34788] select: initializing btl component vader
<br>
[tesla91:34787] usNIC connectivity client finalized
<br>
[tesla91:34787] mca: base: close: component usnic closed
<br>
[tesla91:34787] mca: base: close: unloading component usnic
<br>
[tesla91:34788] select: init of component vader returned success
<br>
[tesla91:34787] select: initializing btl component vader
<br>
[tesla91:34787] select: init of component vader returned success
<br>
--------------------------------------------------------------------------
<br>
[[56695,1],1]: A high-performance Open MPI point-to-point messaging module
<br>
was unable to find any relevant network interfaces:
<br>
<p>Module: usNIC
<br>
&nbsp;&nbsp;Host: tesla88
<br>
<p>Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>F
<br>
<p><p>On Mar 24, 2014, at 4:12 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; No, this is not a configure issue -- the usnic BTL uses the verbs API.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The usnic BTL should be disqualifying itself at runtime, though, if you don't have usNIC devices.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you running on Cisco UCS servers with Cisco VICs, perchance?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If not, could you send the output of &quot;mpirun --mca btl_base_verbose 100 ...&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 23, 2014, at 10:35 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...we'll have to check the configure logic as I don't think you should be getting that message. Regardless, it isn't something of concern - you can turn it &quot;off&quot; by adding
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl ^usnic
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; on your command line, or configuring OMPI --enable-mca-no-build=btl-usnic
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 22, 2014, at 10:00 PM, Filippo Spiga &lt;spiga.filippo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I recompiled Open MPI 1.7.5 a couple of time, I am sure I have been selected openib. However I have some doubts because this message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[28098,1],8]: A high-performance Open MPI point-to-point messaging module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Module: usNIC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host: tesla79
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lower performance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; keeps popping up. I am really worried there might be a degradation of performance because of this warning. Any clue about where it came from and how I can let it disappear?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Filippo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mr. Filippo SPIGA, M.Sc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#171;Nobody will drive us out of Cantor's paradise.&#187; ~ David Hilbert
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *****
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><pre>
--
Mr. Filippo SPIGA, M.Sc.
<a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
&#171;Nobody will drive us out of Cantor's paradise.&#187; ~ David Hilbert
*****
Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24027.php">Dave Goodell (dgoodell): "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<li><strong>Previous message:</strong> <a href="24025.php">Dave Goodell (dgoodell): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23948.php">Jeff Squyres (jsquyres): "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24027.php">Dave Goodell (dgoodell): "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<li><strong>Reply:</strong> <a href="24027.php">Dave Goodell (dgoodell): "Re: [OMPI users] usNIC point-to-point messaging module"</a>
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
