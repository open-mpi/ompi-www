<?
$subject_val = "[OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 04:35:04 2010" -->
<!-- isoreceived="20100226093504" -->
<!-- sent="Fri, 26 Feb 2010 09:34:53 +0000" -->
<!-- isosent="20100226093453" -->
<!-- name="Oliver Ford" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="[OMPI users] Segfault in mca_odls_default.so with &amp;gt; ~100 process." -->
<!-- id="4B8795BD.50700_at_oliford.co.uk" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process.<br>
<strong>From:</strong> Oliver Ford (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-26 04:34:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12166.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="12164.php">Federico Golfr&#232; Andreasi: "[OMPI users] Number of processes and spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12172.php">Ralph Castain: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
<li><strong>Reply:</strong> <a href="12172.php">Ralph Castain: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to run an MPI code across 136 processing using an appfile
<br>
(attached), since every process needs to be run with a host/process
<br>
dependent parameter.
<br>
<p>This whole system works wonderfully for up to around 100 processes but
<br>
usually fails with a segfault, apparently in in mca_odls_default.so,
<br>
during initialization.
<br>
The attached appfile is an attempt at 136 processes. If I split the
<br>
appfile into two, both halves will initialize OK and successfully pass
<br>
an MPI_Barrier() (the program won't actually work without all 136 nodes,
<br>
but I'm happy MPI is doing its job). Because both halves work, I think
<br>
it has to be related to the number of processes - not a problem with a
<br>
specific appfile entry or machine.
<br>
<p>The cluster I am running it on has openmpi-1.3.3 but I have also
<br>
installed 1.4.1 from the website in my home dir and that does the same
<br>
(and is from which the attached data comes).
<br>
<p>The actual segfault is:
<br>
[jac-11:12300] *** Process received signal ***
<br>
[jac-11:12300] Signal: Segmentation fault (11)
<br>
[jac-11:12300] Signal code: Address not mapped (1)
<br>
[jac-11:12300] Failing at address: 0x40
<br>
[jac-11:12300] [ 0] [0x74640c]
<br>
[jac-11:12300] [ 1] /home/oford/openmpi/lib/openmpi/mca_odls_default.so
<br>
[0x8863d4]
<br>
[jac-11:12300] [ 2] /home/oford/openmpi/lib/libopen-rte.so.0 [0x76ffe9]
<br>
[jac-11:12300] [ 3]
<br>
/home/oford/openmpi/lib/libopen-rte.so.0(orte_daemon_cmd_processor+0x2f6)
<br>
[0x771b86]
<br>
[jac-11:12300] [ 4] /home/oford/openmpi/lib/libopen-pal.so.0 [0x5d6ba8]
<br>
[jac-11:12300] [ 5]
<br>
/home/oford/openmpi/lib/libopen-pal.so.0(opal_event_loop+0x27) [0x5d6e47]
<br>
[jac-11:12300] [ 6]
<br>
/home/oford/openmpi/lib/libopen-pal.so.0(opal_progress+0xce) [0x5ca00e]
<br>
[jac-11:12300] [ 7]
<br>
/home/oford/openmpi/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0x355)
<br>
[0x7815f5]
<br>
[jac-11:12300] [ 8] /home/oford/openmpi/lib/openmpi/mca_plm_rsh.so
<br>
[0xc73d1b]
<br>
[jac-11:12300] [ 9] mpirun [0x804a8f0]
<br>
[jac-11:12300] [10] mpirun [0x8049ef6]
<br>
[jac-11:12300] [11] /lib/libc.so.6(__libc_start_main+0xe5) [0x1406e5]
<br>
[jac-11:12300] [12] mpirun [0x8049e41]
<br>
[jac-11:12300] *** End of error message ***
<br>
Segmentation fault
<br>
<p><p>The full output with '-d' and the config.log from the build of 1.4.1 are
<br>
also attached.
<br>
<p>I don't know the exact setup of the network, but I can ask our sysadmin
<br>
anything else that might help.
<br>
<p>Thanks in advance,
<br>
<p><p>Oliver Ford
<br>
<p>Culham Centre for Fusion Energy
<br>
Oxford, UK
<br>
<p><p><p><p><p>
<br><p>
-np 1 --host jac-11 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-39-80115 Y 11 11 133 debug
<br>
-np 1 --host jac-5 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-26-81244 N 11 11 133 debug
<br>
-np 1 --host batch-020 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-122-75993 N 11 11 133 debug
<br>
-np 1 --host batch-037 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-157-15286 N 11 11 133 debug
<br>
-np 1 --host batch-042 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-114-89529 N 11 11 133 debug
<br>
-np 1 --host jac-9 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-35-90257 N 11 11 133 debug
<br>
-np 1 --host batch-020 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-151-56062 N 11 11 133 debug
<br>
-np 1 --host batch-004 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-16-2723 N 11 11 133 debug
<br>
-np 1 --host batch-003 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-156-65790 N 11 11 133 debug
<br>
-np 1 --host jac-11 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-198-63239 N 11 11 133 debug
<br>
-np 1 --host batch-046 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-105-12753 N 11 11 133 debug
<br>
-np 1 --host batch-015 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-12-25631 N 11 11 133 debug
<br>
-np 1 --host jac-12 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-196-35421 N 11 11 133 debug
<br>
-np 1 --host batch-045 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-103-98246 N 11 11 133 debug
<br>
-np 1 --host batch-006 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-142-44009 N 11 11 133 debug
<br>
-np 1 --host batch-044 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-117-30325 N 11 11 133 debug
<br>
-np 1 --host batch-003 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-143-21739 N 11 11 133 debug
<br>
-np 1 --host batch-042 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-112-64293 N 11 11 133 debug
<br>
-np 1 --host batch-041 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-57-11238 N 11 11 133 debug
<br>
-np 1 --host batch-025 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-170-80831 N 11 11 133 debug
<br>
-np 1 --host jac-6 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-32-47578 N 11 11 133 debug
<br>
-np 1 --host batch-027 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-146-27711 N 11 11 133 debug
<br>
-np 1 --host jac-8 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-25-36312 N 11 11 133 debug
<br>
-np 1 --host batch-023 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-154-17110 N 11 11 133 debug
<br>
-np 1 --host batch-023 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-136-3872 N 11 11 133 debug
<br>
-np 1 --host batch-036 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-132-1105 N 11 11 133 debug
<br>
-np 1 --host jac-10 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-192-11991 N 11 11 133 debug
<br>
-np 1 --host batch-045 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-115-41110 N 11 11 133 debug
<br>
-np 1 --host batch-036 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-155-67802 N 11 11 133 debug
<br>
-np 1 --host jac-2 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-40-46953 N 11 11 133 debug
<br>
-np 1 --host batch-006 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-125-79465 N 11 11 133 debug
<br>
-np 1 --host batch-022 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-128-79309 N 11 11 133 debug
<br>
-np 1 --host batch-033 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-152-82320 N 11 11 133 debug
<br>
-np 1 --host batch-026 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-158-68939 N 11 11 133 debug
<br>
-np 1 --host batch-020 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-137-41369 N 11 11 133 debug
<br>
-np 1 --host jac-5 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-2-66663 N 11 11 133 debug
<br>
-np 1 --host batch-046 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-52-62955 N 11 11 133 debug
<br>
-np 1 --host jac-13 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-195-10991 N 11 11 133 debug
<br>
-np 1 --host jac-9 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-193-50774 N 11 11 133 debug
<br>
-np 1 --host jac-3 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-177-45516 N 11 11 133 debug
<br>
-np 1 --host batch-032 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-171-96942 N 11 11 133 debug
<br>
-np 1 --host batch-038 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-175-99761 N 11 11 133 debug
<br>
-np 1 --host batch-006 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-118-35065 N 11 11 133 debug
<br>
-np 1 --host batch-014 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-17-49750 N 11 11 133 debug
<br>
-np 1 --host batch-030 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-169-10604 N 11 11 133 debug
<br>
-np 1 --host jac-2 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-46-74041 N 11 11 133 debug
<br>
-np 1 --host jac-13 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-187-7833 N 11 11 133 debug
<br>
-np 1 --host jac-7 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-200-36312 N 11 11 133 debug
<br>
-np 1 --host batch-027 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-159-37278 N 11 11 133 debug
<br>
-np 1 --host batch-045 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-11-37181 N 11 11 133 debug
<br>
-np 1 --host batch-013 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-149-11377 N 11 11 133 debug
<br>
-np 1 --host jac-3 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-179-64715 N 11 11 133 debug
<br>
-np 1 --host jac-2 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-44-46953 N 11 11 133 debug
<br>
-np 1 --host batch-017 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-130-64980 N 11 11 133 debug
<br>
-np 1 --host batch-015 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-13-39413 N 11 11 133 debug
<br>
-np 1 --host jac-8 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-34-46573 N 11 11 133 debug
<br>
-np 1 --host batch-027 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-134-85354 N 11 11 133 debug
<br>
-np 1 --host jac-7 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-194-95760 N 11 11 133 debug
<br>
-np 1 --host batch-013 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-133-18010 N 11 11 133 debug
<br>
-np 1 --host batch-024 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-173-20377 N 11 11 133 debug
<br>
-np 1 --host batch-013 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-160-43487 N 11 11 133 debug
<br>
-np 1 --host batch-046 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-106-65988 N 11 11 133 debug
<br>
-np 1 --host jac-3 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-18-18834 N 11 11 133 debug
<br>
-np 1 --host jac-3 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-180-19539 N 11 11 133 debug
<br>
-np 1 --host batch-022 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-140-53706 N 11 11 133 debug
<br>
-np 1 --host jac-7 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-184-80559 N 11 11 133 debug
<br>
-np 1 --host batch-023 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-126-6794 N 11 11 133 debug
<br>
-np 1 --host batch-044 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-111-83886 N 11 11 133 debug
<br>
-np 1 --host batch-005 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-150-26152 N 11 11 133 debug
<br>
-np 1 --host jac-9 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-29-81244 N 11 11 133 debug
<br>
-np 1 --host jac-10 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-30-5208 N 11 11 133 debug
<br>
-np 1 --host jac-6 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-185-82710 N 11 11 133 debug
<br>
-np 1 --host batch-022 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-153-49288 N 11 11 133 debug
<br>
-np 1 --host batch-026 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-131-48260 N 11 11 133 debug
<br>
-np 1 --host jac-10 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-21-85978 N 11 11 133 debug
<br>
-np 1 --host jac-12 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-186-67937 N 11 11 133 debug
<br>
-np 1 --host batch-033 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-135-94983 N 11 11 133 debug
<br>
-np 1 --host batch-044 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-107-10462 N 11 11 133 debug
<br>
-np 1 --host batch-046 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-113-29689 N 11 11 133 debug
<br>
-np 1 --host jac-4 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-27-60637 N 11 11 133 debug
<br>
-np 1 --host jac-2 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-36-26250 N 11 11 133 debug
<br>
-np 1 --host batch-017 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-119-1554 N 11 11 133 debug
<br>
-np 1 --host jac-6 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-24-17859 N 11 11 133 debug
<br>
-np 1 --host jac-12 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-31-5480 N 11 11 133 debug
<br>
-np 1 --host jac-13 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-23-24746 N 11 11 133 debug
<br>
-np 1 --host batch-005 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-138-53784 N 11 11 133 debug
<br>
-np 1 --host jac-7 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-33-43810 N 11 11 133 debug
<br>
-np 1 --host batch-005 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-121-38059 N 11 11 133 debug
<br>
-np 1 --host batch-036 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-145-79515 N 11 11 133 debug
<br>
-np 1 --host batch-042 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-109-66314 N 11 11 133 debug
<br>
-np 1 --host batch-028 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-168-62760 N 11 11 133 debug
<br>
-np 1 --host batch-001 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-166-35091 N 11 11 133 debug
<br>
-np 1 --host jac-13 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-3-30335 N 11 11 133 debug
<br>
-np 1 --host batch-043 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-108-43856 N 11 11 133 debug
<br>
-np 1 --host batch-041 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-116-98652 N 11 11 133 debug
<br>
-np 1 --host jac-8 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-189-70592 N 11 11 133 debug
<br>
-np 1 --host batch-004 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-148-12571 N 11 11 133 debug
<br>
-np 1 --host jac-4 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-38-79978 N 11 11 133 debug
<br>
-np 1 --host batch-003 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-129-21483 N 11 11 133 debug
<br>
-np 1 --host batch-033 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-124-3865 N 11 11 133 debug
<br>
-np 1 --host jac-11 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-191-79048 N 11 11 133 debug
<br>
-np 1 --host jac-4 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-188-93446 N 11 11 133 debug
<br>
-np 1 --host jac-10 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-37-71686 N 11 11 133 debug
<br>
-np 1 --host batch-037 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-162-83683 N 11 11 133 debug
<br>
-np 1 --host batch-043 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-1-48706 N 11 11 133 debug
<br>
-np 1 --host jac-8 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-199-95838 N 11 11 133 debug
<br>
-np 1 --host jac-3 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-178-23994 N 11 11 133 debug
<br>
-np 1 --host batch-026 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-144-79515 N 11 11 133 debug
<br>
-np 1 --host batch-008 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-15-46689 N 11 11 133 debug
<br>
-np 1 --host jac-4 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-197-46966 N 11 11 133 debug
<br>
-np 1 --host jac-2 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-41-82354 N 11 11 133 debug
<br>
-np 1 --host jac-9 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-20-1112 N 11 11 133 debug
<br>
-np 1 --host batch-039 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-176-80381 N 11 11 133 debug
<br>
-np 1 --host batch-041 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-101-91749 N 11 11 133 debug
<br>
-np 1 --host batch-043 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-10-96608 N 11 11 133 debug
<br>
-np 1 --host batch-017 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-139-62526 N 11 11 133 debug
<br>
-np 1 --host batch-007 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-164-93486 N 11 11 133 debug
<br>
-np 1 --host batch-018 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-174-37716 N 11 11 133 debug
<br>
-np 1 --host batch-041 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-104-25353 N 11 11 133 debug
<br>
-np 1 --host batch-031 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-172-7131 N 11 11 133 debug
<br>
-np 1 --host batch-006 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-127-18397 N 11 11 133 debug
<br>
-np 1 --host batch-034 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-147-65530 N 11 11 133 debug
<br>
-np 1 --host batch-015 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-14-40975 N 11 11 133 debug
<br>
-np 1 --host batch-017 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-123-45216 N 11 11 133 debug
<br>
-np 1 --host jac-6 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-190-27454 N 11 11 133 debug
<br>
-np 1 --host batch-007 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-141-10541 N 11 11 133 debug
<br>
-np 1 --host batch-043 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-102-77190 N 11 11 133 debug
<br>
-np 1 --host batch-015 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-120-13012 N 11 11 133 debug
<br>
-np 1 --host jac-5 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-19-29582 N 11 11 133 debug
<br>
-np 1 --host batch-008 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-161-20135 N 11 11 133 debug
<br>
-np 1 --host batch-040 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-163-95832 N 11 11 133 debug
<br>
-np 1 --host batch-019 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-167-60329 N 11 11 133 debug
<br>
-np 1 --host jac-11 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-28-77824 N 11 11 133 debug
<br>
-np 1 --host batch-034 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-165-57829 N 11 11 133 debug
<br>
-np 1 --host jac-5 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-4-1153 N 11 11 133 debug
<br>
-np 1 --host jac-12 /home/oford/java/mcServer/lgidmath/lgidmath /tmp/lgiStaging/mats-94280x5887-22-4961 N 11 11 133 debug
<br>
<p><p><p>
<br><p>
[jac-11:15014] procdir: /tmp/openmpi-sessions-oford_at_jac-11_0/48099/0/0
<br>
[jac-11:15014] jobdir: /tmp/openmpi-sessions-oford_at_jac-11_0/48099/0
<br>
[jac-11:15014] top: openmpi-sessions-oford_at_jac-11_0
<br>
[jac-11:15014] tmp: /tmp
<br>
[jac-11:15014] mpirun: reset PATH: /home/oford/openmpi/bin:/home/oford/openmpi/bin:/home/oford/bin:/usr/lib/qt-3.3/bin:/usr/bin:/bin:/usr/local/depot/PGI/pgi-7.0/linux86/7.0/bin:/usr/local/bin:/jet/share/root/bin:/jet/share/bin:.:/u/sim/sh:/u/sim/cmg/sh:/home/oford/sh:/u/sim/sh/linux:/home/oford/sh/linux:/u/sim/edge2d/sh:/u/sim/edge2d/sh/linux:/home/oford/edge2d/sh:/home/oford/edge2d/sh/linux:/u/sim/jetto/sh
<br>
[jac-11:15014] mpirun: reset LD_LIBRARY_PATH: /home/oford/openmpi/lib:/home/oford/openmpi/lib:/u/sim/mdsplus/default/lib/linux:/u/sim/jproc/default/lib/linux:/u/sim/eproc/default/lib/linux/fixed:/home/oford/oldXlib:/home/oford/hdf5:/jet/share/lib:/usr/local/lib
<br>
[batch-020:17451] procdir: /tmp/openmpi-sessions-oford_at_batch-020_0/48099/0/2
<br>
[batch-020:17451] jobdir: /tmp/openmpi-sessions-oford_at_batch-020_0/48099/0
<br>
[batch-020:17451] top: openmpi-sessions-oford_at_batch-020_0
<br>
[batch-020:17451] tmp: /tmp
<br>
[batch-042:15862] procdir: /tmp/openmpi-sessions-oford_at_batch-042_0/48099/0/4
<br>
[batch-042:15862] jobdir: /tmp/openmpi-sessions-oford_at_batch-042_0/48099/0
<br>
[batch-042:15862] top: openmpi-sessions-oford_at_batch-042_0
<br>
[batch-042:15862] tmp: /tmp
<br>
[batch-023:09760] procdir: /tmp/openmpi-sessions-oford_at_batch-023_0/48099/0/19
<br>
[batch-023:09760] jobdir: /tmp/openmpi-sessions-oford_at_batch-023_0/48099/0
<br>
[batch-023:09760] top: openmpi-sessions-oford_at_batch-023_0
<br>
[batch-023:09760] tmp: /tmp
<br>
[batch-025:05770] procdir: /tmp/openmpi-sessions-oford_at_batch-025_0/48099/0/15
<br>
[batch-025:05770] jobdir: /tmp/openmpi-sessions-oford_at_batch-025_0/48099/0
<br>
[batch-025:05770] top: openmpi-sessions-oford_at_batch-025_0
<br>
[batch-025:05770] tmp: /tmp
<br>
[batch-037:17611] procdir: /tmp/openmpi-sessions-oford_at_batch-037_0/48099/0/3
<br>
[batch-037:17611] jobdir: /tmp/openmpi-sessions-oford_at_batch-037_0/48099/0
<br>
[batch-037:17611] top: openmpi-sessions-oford_at_batch-037_0
<br>
[batch-037:17611] tmp: /tmp
<br>
[jac-5:15183] procdir: /tmp/openmpi-sessions-oford_at_jac-5_0/48099/0/1
<br>
[jac-5:15183] jobdir: /tmp/openmpi-sessions-oford_at_jac-5_0/48099/0
<br>
[jac-5:15183] top: openmpi-sessions-oford_at_jac-5_0
<br>
[jac-5:15183] tmp: /tmp
<br>
[jac-9:22204] procdir: /tmp/openmpi-sessions-oford_at_jac-9_0/48099/0/5
<br>
[jac-9:22204] jobdir: /tmp/openmpi-sessions-oford_at_jac-9_0/48099/0
<br>
[jac-9:22204] top: openmpi-sessions-oford_at_jac-9_0
<br>
[jac-9:22204] tmp: /tmp
<br>
[batch-013:23865] procdir: /tmp/openmpi-sessions-oford_at_batch-013_0/48099/0/33
<br>
[batch-013:23865] jobdir: /tmp/openmpi-sessions-oford_at_batch-013_0/48099/0
<br>
[batch-013:23865] top: openmpi-sessions-oford_at_batch-013_0
<br>
[batch-013:23865] tmp: /tmp
<br>
[batch-022:15225] procdir: /tmp/openmpi-sessions-oford_at_batch-022_0/48099/0/23
<br>
[batch-022:15225] jobdir: /tmp/openmpi-sessions-oford_at_batch-022_0/48099/0
<br>
[batch-022:15225] top: openmpi-sessions-oford_at_batch-022_0
<br>
[batch-022:15225] tmp: /tmp
<br>
[batch-018:19925] procdir: /tmp/openmpi-sessions-oford_at_batch-018_0/48099/0/44
<br>
[batch-018:19925] jobdir: /tmp/openmpi-sessions-oford_at_batch-018_0/48099/0
<br>
[batch-018:19925] top: openmpi-sessions-oford_at_batch-018_0
<br>
[batch-018:19925] tmp: /tmp
<br>
[jac-4:06627] procdir: /tmp/openmpi-sessions-oford_at_jac-4_0/48099/0/37
<br>
[jac-4:06627] jobdir: /tmp/openmpi-sessions-oford_at_jac-4_0/48099/0
<br>
[jac-4:06627] top: openmpi-sessions-oford_at_jac-4_0
<br>
[jac-4:06627] tmp: /tmp
<br>
[batch-004:30088] procdir: /tmp/openmpi-sessions-oford_at_batch-004_0/48099/0/6
<br>
[batch-004:30088] jobdir: /tmp/openmpi-sessions-oford_at_batch-004_0/48099/0
<br>
[batch-004:30088] top: openmpi-sessions-oford_at_batch-004_0
<br>
[batch-004:30088] tmp: /tmp
<br>
[batch-046:00820] procdir: /tmp/openmpi-sessions-oford_at_batch-046_0/48099/0/8
<br>
[batch-046:00820] jobdir: /tmp/openmpi-sessions-oford_at_batch-046_0/48099/0
<br>
[batch-046:00820] top: openmpi-sessions-oford_at_batch-046_0
<br>
[batch-046:00820] tmp: /tmp
<br>
[batch-036:16988] procdir: /tmp/openmpi-sessions-oford_at_batch-036_0/48099/0/20
<br>
[batch-036:16988] jobdir: /tmp/openmpi-sessions-oford_at_batch-036_0/48099/0
<br>
[batch-036:16988] top: openmpi-sessions-oford_at_batch-036_0
<br>
[batch-036:16988] tmp: /tmp
<br>
[batch-030:25412] procdir: /tmp/openmpi-sessions-oford_at_batch-030_0/48099/0/31
<br>
[batch-030:25412] jobdir: /tmp/openmpi-sessions-oford_at_batch-030_0/48099/0
<br>
[batch-030:25412] top: openmpi-sessions-oford_at_batch-030_0
<br>
[batch-030:25412] tmp: /tmp
<br>
[jac-6:04101] procdir: /tmp/openmpi-sessions-oford_at_jac-6_0/48099/0/16
<br>
[jac-6:04101] jobdir: /tmp/openmpi-sessions-oford_at_jac-6_0/48099/0
<br>
[jac-6:04101] top: openmpi-sessions-oford_at_jac-6_0
<br>
[jac-6:04101] tmp: /tmp
<br>
[batch-006:16136] procdir: /tmp/openmpi-sessions-oford_at_batch-006_0/48099/0/12
<br>
[batch-006:16136] jobdir: /tmp/openmpi-sessions-oford_at_batch-006_0/48099/0
<br>
[batch-006:16136] top: openmpi-sessions-oford_at_batch-006_0
<br>
[batch-006:16136] tmp: /tmp
<br>
[jac-7:17379] procdir: /tmp/openmpi-sessions-oford_at_jac-7_0/48099/0/32
<br>
[jac-7:17379] jobdir: /tmp/openmpi-sessions-oford_at_jac-7_0/48099/0
<br>
[jac-7:17379] top: openmpi-sessions-oford_at_jac-7_0
<br>
[jac-7:17379] tmp: /tmp
<br>
[batch-003:23921] procdir: /tmp/openmpi-sessions-oford_at_batch-003_0/48099/0/7
<br>
[batch-003:23921] jobdir: /tmp/openmpi-sessions-oford_at_batch-003_0/48099/0
<br>
[batch-003:23921] top: openmpi-sessions-oford_at_batch-003_0
<br>
[batch-003:23921] tmp: /tmp
<br>
[batch-044:01101] procdir: /tmp/openmpi-sessions-oford_at_batch-044_0/48099/0/13
<br>
[batch-044:01101] jobdir: /tmp/openmpi-sessions-oford_at_batch-044_0/48099/0
<br>
[batch-044:01101] top: openmpi-sessions-oford_at_batch-044_0
<br>
[batch-044:01101] tmp: /tmp
<br>
[batch-039:02035] procdir: /tmp/openmpi-sessions-oford_at_batch-039_0/48099/0/42
<br>
[batch-039:02035] jobdir: /tmp/openmpi-sessions-oford_at_batch-039_0/48099/0
<br>
[batch-039:02035] top: openmpi-sessions-oford_at_batch-039_0
<br>
[batch-039:02035] tmp: /tmp
<br>
[batch-033:02863] procdir: /tmp/openmpi-sessions-oford_at_batch-033_0/48099/0/24
<br>
[batch-033:02863] jobdir: /tmp/openmpi-sessions-oford_at_batch-033_0/48099/0
<br>
[batch-033:02863] top: openmpi-sessions-oford_at_batch-033_0
<br>
[batch-033:02863] tmp: /tmp
<br>
[jac-8:26567] procdir: /tmp/openmpi-sessions-oford_at_jac-8_0/48099/0/18
<br>
[jac-8:26567] jobdir: /tmp/openmpi-sessions-oford_at_jac-8_0/48099/0
<br>
[jac-8:26567] top: openmpi-sessions-oford_at_jac-8_0
<br>
[jac-8:26567] tmp: /tmp
<br>
[batch-028:14068] procdir: /tmp/openmpi-sessions-oford_at_batch-028_0/48099/0/38
<br>
[batch-028:14068] jobdir: /tmp/openmpi-sessions-oford_at_batch-028_0/48099/0
<br>
[batch-028:14068] top: openmpi-sessions-oford_at_batch-028_0
<br>
[batch-028:14068] tmp: /tmp
<br>
[batch-019:32641] procdir: /tmp/openmpi-sessions-oford_at_batch-019_0/48099/0/48
<br>
[batch-019:32641] jobdir: /tmp/openmpi-sessions-oford_at_batch-019_0/48099/0
<br>
[batch-019:32641] top: openmpi-sessions-oford_at_batch-019_0
<br>
[batch-019:32641] tmp: /tmp
<br>
[batch-038:07716] procdir: /tmp/openmpi-sessions-oford_at_batch-038_0/48099/0/29
<br>
[batch-038:07716] jobdir: /tmp/openmpi-sessions-oford_at_batch-038_0/48099/0
<br>
[batch-038:07716] top: openmpi-sessions-oford_at_batch-038_0
<br>
[batch-038:07716] tmp: /tmp
<br>
[jac-2:05183] procdir: /tmp/openmpi-sessions-oford_at_jac-2_0/48099/0/22
<br>
[jac-2:05183] jobdir: /tmp/openmpi-sessions-oford_at_jac-2_0/48099/0
<br>
[jac-2:05183] top: openmpi-sessions-oford_at_jac-2_0
<br>
[jac-2:05183] tmp: /tmp
<br>
[batch-017:25718] procdir: /tmp/openmpi-sessions-oford_at_batch-017_0/48099/0/34
<br>
[batch-017:25718] jobdir: /tmp/openmpi-sessions-oford_at_batch-017_0/48099/0
<br>
[batch-017:25718] top: openmpi-sessions-oford_at_batch-017_0
<br>
[batch-017:25718] tmp: /tmp
<br>
[batch-026:09510] procdir: /tmp/openmpi-sessions-oford_at_batch-026_0/48099/0/25
<br>
[batch-026:09510] jobdir: /tmp/openmpi-sessions-oford_at_batch-026_0/48099/0
<br>
[batch-026:09510] top: openmpi-sessions-oford_at_batch-026_0
<br>
[batch-026:09510] tmp: /tmp
<br>
[batch-043:01668] procdir: /tmp/openmpi-sessions-oford_at_batch-043_0/48099/0/40
<br>
[batch-043:01668] jobdir: /tmp/openmpi-sessions-oford_at_batch-043_0/48099/0
<br>
[batch-043:01668] top: openmpi-sessions-oford_at_batch-043_0
<br>
[batch-043:01668] tmp: /tmp
<br>
[batch-008:17836] procdir: /tmp/openmpi-sessions-oford_at_batch-008_0/48099/0/41
<br>
[batch-008:17836] jobdir: /tmp/openmpi-sessions-oford_at_batch-008_0/48099/0
<br>
[batch-008:17836] top: openmpi-sessions-oford_at_batch-008_0
<br>
[batch-008:17836] tmp: /tmp
<br>
[jac-12:17562] procdir: /tmp/openmpi-sessions-oford_at_jac-12_0/48099/0/10
<br>
[jac-12:17562] jobdir: /tmp/openmpi-sessions-oford_at_jac-12_0/48099/0
<br>
[jac-12:17562] top: openmpi-sessions-oford_at_jac-12_0
<br>
[jac-12:17562] tmp: /tmp
<br>
[batch-005:03532] procdir: /tmp/openmpi-sessions-oford_at_batch-005_0/48099/0/36
<br>
[batch-005:03532] jobdir: /tmp/openmpi-sessions-oford_at_batch-005_0/48099/0
<br>
[batch-005:03532] top: openmpi-sessions-oford_at_batch-005_0
<br>
[batch-005:03532] tmp: /tmp
<br>
[batch-045:04261] procdir: /tmp/openmpi-sessions-oford_at_batch-045_0/48099/0/11
<br>
[batch-045:04261] jobdir: /tmp/openmpi-sessions-oford_at_batch-045_0/48099/0
<br>
[batch-045:04261] top: openmpi-sessions-oford_at_batch-045_0
<br>
[batch-045:04261] tmp: /tmp
<br>
[batch-001:22016] procdir: /tmp/openmpi-sessions-oford_at_batch-001_0/48099/0/39
<br>
[batch-001:22016] jobdir: /tmp/openmpi-sessions-oford_at_batch-001_0/48099/0
<br>
[batch-001:22016] top: openmpi-sessions-oford_at_batch-001_0
<br>
[batch-001:22016] tmp: /tmp
<br>
[batch-040:08361] procdir: /tmp/openmpi-sessions-oford_at_batch-040_0/48099/0/47
<br>
[batch-040:08361] jobdir: /tmp/openmpi-sessions-oford_at_batch-040_0/48099/0
<br>
[batch-040:08361] top: openmpi-sessions-oford_at_batch-040_0
<br>
[batch-040:08361] tmp: /tmp
<br>
[batch-007:05689] procdir: /tmp/openmpi-sessions-oford_at_batch-007_0/48099/0/43
<br>
[batch-007:05689] jobdir: /tmp/openmpi-sessions-oford_at_batch-007_0/48099/0
<br>
[batch-007:05689] top: openmpi-sessions-oford_at_batch-007_0
<br>
[batch-007:05689] tmp: /tmp
<br>
[batch-032:02059] procdir: /tmp/openmpi-sessions-oford_at_batch-032_0/48099/0/28
<br>
[batch-032:02059] jobdir: /tmp/openmpi-sessions-oford_at_batch-032_0/48099/0
<br>
[batch-032:02059] top: openmpi-sessions-oford_at_batch-032_0
<br>
[batch-032:02059] tmp: /tmp
<br>
[batch-031:01049] procdir: /tmp/openmpi-sessions-oford_at_batch-031_0/48099/0/45
<br>
[batch-031:01049] jobdir: /tmp/openmpi-sessions-oford_at_batch-031_0/48099/0
<br>
[batch-031:01049] top: openmpi-sessions-oford_at_batch-031_0
<br>
[batch-031:01049] tmp: /tmp
<br>
[batch-024:05301] procdir: /tmp/openmpi-sessions-oford_at_batch-024_0/48099/0/35
<br>
[batch-024:05301] jobdir: /tmp/openmpi-sessions-oford_at_batch-024_0/48099/0
<br>
[batch-024:05301] top: openmpi-sessions-oford_at_batch-024_0
<br>
[batch-024:05301] tmp: /tmp
<br>
[batch-034:24766] procdir: /tmp/openmpi-sessions-oford_at_batch-034_0/48099/0/46
<br>
[batch-034:24766] jobdir: /tmp/openmpi-sessions-oford_at_batch-034_0/48099/0
<br>
[batch-034:24766] top: openmpi-sessions-oford_at_batch-034_0
<br>
[batch-034:24766] tmp: /tmp
<br>
[jac-10:27707] procdir: /tmp/openmpi-sessions-oford_at_jac-10_0/48099/0/21
<br>
[jac-10:27707] jobdir: /tmp/openmpi-sessions-oford_at_jac-10_0/48099/0
<br>
[jac-10:27707] top: openmpi-sessions-oford_at_jac-10_0
<br>
[jac-10:27707] tmp: /tmp
<br>
[batch-014:30991] procdir: /tmp/openmpi-sessions-oford_at_batch-014_0/48099/0/30
<br>
[batch-014:30991] jobdir: /tmp/openmpi-sessions-oford_at_batch-014_0/48099/0
<br>
[batch-014:30991] top: openmpi-sessions-oford_at_batch-014_0
<br>
[batch-014:30991] tmp: /tmp
<br>
[jac-3:20114] procdir: /tmp/openmpi-sessions-oford_at_jac-3_0/48099/0/27
<br>
[jac-3:20114] jobdir: /tmp/openmpi-sessions-oford_at_jac-3_0/48099/0
<br>
[jac-3:20114] top: openmpi-sessions-oford_at_jac-3_0
<br>
[jac-3:20114] tmp: /tmp
<br>
[batch-015:01829] procdir: /tmp/openmpi-sessions-oford_at_batch-015_0/48099/0/9
<br>
[batch-015:01829] jobdir: /tmp/openmpi-sessions-oford_at_batch-015_0/48099/0
<br>
[batch-015:01829] top: openmpi-sessions-oford_at_batch-015_0
<br>
[batch-015:01829] tmp: /tmp
<br>
[batch-041:17727] procdir: /tmp/openmpi-sessions-oford_at_batch-041_0/48099/0/14
<br>
[batch-041:17727] jobdir: /tmp/openmpi-sessions-oford_at_batch-041_0/48099/0
<br>
[batch-041:17727] top: openmpi-sessions-oford_at_batch-041_0
<br>
[batch-041:17727] tmp: /tmp
<br>
[jac-13:26153] procdir: /tmp/openmpi-sessions-oford_at_jac-13_0/48099/0/26
<br>
[jac-13:26153] jobdir: /tmp/openmpi-sessions-oford_at_jac-13_0/48099/0
<br>
[jac-13:26153] top: openmpi-sessions-oford_at_jac-13_0
<br>
[jac-13:26153] tmp: /tmp
<br>
[batch-027:23746] procdir: /tmp/openmpi-sessions-oford_at_batch-027_0/48099/0/17
<br>
[batch-027:23746] jobdir: /tmp/openmpi-sessions-oford_at_batch-027_0/48099/0
<br>
[batch-027:23746] top: openmpi-sessions-oford_at_batch-027_0
<br>
[batch-027:23746] tmp: /tmp
<br>
[jac-11:15014] [[48099,0],0] node[0].name jac-11 daemon 0 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[1].name jac-5 daemon 1 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[2].name batch-020 daemon 2 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[3].name batch-037 daemon 3 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[4].name batch-042 daemon 4 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[5].name jac-9 daemon 5 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[6].name batch-004 daemon 6 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[7].name batch-003 daemon 7 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[8].name batch-046 daemon 8 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[9].name batch-015 daemon 9 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[10].name jac-12 daemon 10 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[11].name batch-045 daemon 11 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[12].name batch-006 daemon 12 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[13].name batch-044 daemon 13 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[14].name batch-041 daemon 14 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[15].name batch-025 daemon 15 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[16].name jac-6 daemon 16 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[17].name batch-027 daemon 17 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[18].name jac-8 daemon 18 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[19].name batch-023 daemon 19 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[20].name batch-036 daemon 20 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[21].name jac-10 daemon 21 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[22].name jac-2 daemon 22 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[23].name batch-022 daemon 23 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[24].name batch-033 daemon 24 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[25].name batch-026 daemon 25 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[26].name jac-13 daemon 26 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[27].name jac-3 daemon 27 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[28].name batch-032 daemon 28 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[29].name batch-038 daemon 29 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[30].name batch-014 daemon 30 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[31].name batch-030 daemon 31 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[32].name jac-7 daemon 32 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[33].name batch-013 daemon 33 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[34].name batch-017 daemon 34 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[35].name batch-024 daemon 35 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[36].name batch-005 daemon 36 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[37].name jac-4 daemon 37 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[38].name batch-028 daemon 38 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[39].name batch-001 daemon 39 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[40].name batch-043 daemon 40 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[41].name batch-008 daemon 41 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[42].name batch-039 daemon 42 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[43].name batch-007 daemon 43 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[44].name batch-018 daemon 44 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[45].name batch-031 daemon 45 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[46].name batch-034 daemon 46 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[47].name batch-040 daemon 47 arch ffca0200
<br>
[jac-11:15014] [[48099,0],0] node[48].name batch-019 daemon 48 arch ffca0200
<br>
[jac-11:15014] *** Process received signal ***
<br>
[jac-11:15014] Signal: Segmentation fault (11)
<br>
[jac-11:15014] Signal code: Address not mapped (1)
<br>
[jac-11:15014] Failing at address: 0x302c5d70
<br>
[jac-11:15014] [ 0] [0x9f540c]
<br>
[jac-11:15014] [ 1] /home/oford/openmpi/lib/openmpi/mca_odls_default.so [0x52c3d4]
<br>
[jac-11:15014] [ 2] /home/oford/openmpi/lib/libopen-rte.so.0 [0x22afe9]
<br>
[jac-11:15014] [ 3] /home/oford/openmpi/lib/libopen-rte.so.0(orte_daemon_cmd_processor+0x2f6) [0x22cb86]
<br>
[jac-11:15014] [ 4] /home/oford/openmpi/lib/libopen-pal.so.0 [0x129ba8]
<br>
[jac-11:15014] [ 5] /home/oford/openmpi/lib/libopen-pal.so.0(opal_event_loop+0x27) [0x129e47]
<br>
[jac-11:15014] [ 6] /home/oford/openmpi/lib/libopen-pal.so.0(opal_progress+0xce) [0x11d00e]
<br>
[jac-11:15014] [ 7] /home/oford/openmpi/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0x355) [0x23c5f5]
<br>
[jac-11:15014] [ 8] /home/oford/openmpi/lib/openmpi/mca_plm_rsh.so [0x391d1b]
<br>
[jac-11:15014] [ 9] mpirun [0x804a8f0]
<br>
[jac-11:15014] [10] mpirun [0x8049ef6]
<br>
[jac-11:15014] [11] /lib/libc.so.6(__libc_start_main+0xe5) [0x5b36e5]
<br>
[jac-11:15014] [12] mpirun [0x8049e41]
<br>
[jac-11:15014] *** End of error message ***
<br>
[batch-041:17727] [[48099,0],14] routed:binomial: Connection to lifeline [[48099,0],0] lo[jac-6:04101] sess_dir_finalize: proc session dir not empty - leaving
<br>
eaving
<br>
batch-034:24766] sess_dir_finalize: proc session dir not empty - leaving
<br>
<p>[jac-12:17562] sess_dir_finalize: proc session dir not empty - leaving
<br>
ng
<br>
<p><p><p>
<br><p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI oford_at_jac-12 Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.4.1
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r22421
<br>
&nbsp;&nbsp;&nbsp;Open MPI release date: Jan 14, 2010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.4.1
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r22421
<br>
&nbsp;&nbsp;&nbsp;Open RTE release date: Jan 14, 2010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.4.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r22421
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: Jan 14, 2010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.4.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /home/oford/openmpi
<br>
&nbsp;Configured architecture: i686-pc-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: jac-12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: oford
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Thu Feb 25 22:46:23 GMT 2010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: jac-12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: oford
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Thu Feb 25 23:03:10 GMT 2010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: jac-2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;Fortran90 bindings size: small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran77 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran90 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sparse Groups: no
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;Heterogeneous support: no
<br>
&nbsp;mpirun default --prefix: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI I/O support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_WTIME support: gettimeofday
<br>
Symbol visibility support: yes
<br>
&nbsp;&nbsp;&nbsp;FT Checkpoint support: no  (checkpoint thread: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA carto: file (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: linux (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: env (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: config (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA dpm: orte (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: inter (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sync (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: tuned (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: fake (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: cm (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: csum (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: v (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rcache: vma (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: rdma (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: hnp (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: orted (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: tool (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA odls: default (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: slurm (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: binomial (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: direct (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: linear (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: rsh (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: slurm (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA filem: rsh (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: default (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: env (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: hnp (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: singleton (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: slurm (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: tool (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.4.1)
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12165/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12166.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="12164.php">Federico Golfr&#232; Andreasi: "[OMPI users] Number of processes and spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12172.php">Ralph Castain: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
<li><strong>Reply:</strong> <a href="12172.php">Ralph Castain: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
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
