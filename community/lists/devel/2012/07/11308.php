<?
$subject_val = "[OMPI devel] Existing frameworks for remote device memory exclusive read/write";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 20 18:28:04 2012" -->
<!-- isoreceived="20120720222804" -->
<!-- sent="Sat, 21 Jul 2012 00:27:59 +0200" -->
<!-- isosent="20120720222759" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="[OMPI devel] Existing frameworks for remote device memory exclusive read/write" -->
<!-- id="CAGR4S9FApvFeVHNvUZDTTPj615+A2XQAEtLhMY7JgouQZ7h3qw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Existing frameworks for remote device memory exclusive read/write<br>
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-20 18:27:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11309.php">Rolf Riesen: "[OMPI devel] AUTO: Rolf Riesen is on vacation (returning 07/08/2012)"</a>
<li><strong>Previous message:</strong> <a href="11307.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26804 -	trunk/ompi/mca/btl/openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11313.php">George Bosilca: "Re: [OMPI devel] Existing frameworks for remote device memory exclusive read/write"</a>
<li><strong>Reply:</strong> <a href="11313.php">George Bosilca: "Re: [OMPI devel] Existing frameworks for remote device memory exclusive read/write"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI developers,
<br>
<p>My question is not directly related to OpenMPI, but might be related to
<br>
internal project kitchen and your wide experiences.
<br>
<p>Say, there is a need to implement a transparent read/write of PCI-Express
<br>
device internal memory from the host system. It is allowed to use only
<br>
software capabilities of PCI-E device, which can memcpy synchronously and
<br>
asynchronously in both directions. Memcpy can be initiated both by host and
<br>
device. Host is required to implement its device memory read/write in
<br>
critical sections: no PCI-E code could be using the same memory, while it
<br>
is in operation.
<br>
<p>Question: could you please point related projects/subsystems, which code
<br>
could be reused to implement the described functionality? We are mostly
<br>
interested in ones implementing multiple strategies of memory
<br>
synchronization, since there could be quite some, depending on typical
<br>
memory access patterns, for example. This subsystem is necessary for our
<br>
project, however not its primary goal, that's why we would like to borrow
<br>
existing things in best possible way.
<br>
<p>Thanks and best regards,
<br>
- Dima.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11308/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11309.php">Rolf Riesen: "[OMPI devel] AUTO: Rolf Riesen is on vacation (returning 07/08/2012)"</a>
<li><strong>Previous message:</strong> <a href="11307.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26804 -	trunk/ompi/mca/btl/openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11313.php">George Bosilca: "Re: [OMPI devel] Existing frameworks for remote device memory exclusive read/write"</a>
<li><strong>Reply:</strong> <a href="11313.php">George Bosilca: "Re: [OMPI devel] Existing frameworks for remote device memory exclusive read/write"</a>
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
