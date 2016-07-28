<?
$subject_val = "[OMPI devel] Fwd: + ummunotify-userspace-support-for-mmu-notifications-v2.patch added to -mm tree";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 11 10:14:43 2010" -->
<!-- isoreceived="20100511141443" -->
<!-- sent="Tue, 11 May 2010 10:14:37 -0400" -->
<!-- isosent="20100511141437" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: + ummunotify-userspace-support-for-mmu-notifications-v2.patch added to -mm tree" -->
<!-- id="75B438CA-BBFC-4609-B29A-48D593613BA8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201005102055.o4AKtafr022135_at_imap1.linux-foundation.org" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: + ummunotify-userspace-support-for-mmu-notifications-v2.patch added to -mm tree<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-11 10:14:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7912.php">Roland Dreier: "Re: [OMPI devel] Fwd: + ummunotify-userspace-support-for-mmu-notifications-v2.patch added to -mm tree"</a>
<li><strong>Previous message:</strong> <a href="7910.php">Ralf Wildenhues: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7912.php">Roland Dreier: "Re: [OMPI devel] Fwd: + ummunotify-userspace-support-for-mmu-notifications-v2.patch added to -mm tree"</a>
<li><strong>Reply:</strong> <a href="7912.php">Roland Dreier: "Re: [OMPI devel] Fwd: + ummunotify-userspace-support-for-mmu-notifications-v2.patch added to -mm tree"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Woo hoo!  It looks like ummunotify went into the -mm kernel tree yesterday.
<br>
<p>I'll probably bring the ummunotify support stuff into the trunk in the near future (probably by the end of this week) unless someone has a strong objection.  
<br>
<p>NOTE: The OPAL memory &quot;ptmalloc2&quot; component is no more -- I merged the ummunotify and ptmalloc2 support into a single component named &quot;linux&quot;.  The &quot;linux&quot; component will use ummunotify if it is present (and *NOT* use the ptmalloc2/glibc malloc hooks).  If ummunotify is not present, it'll try to use ptmalloc2 with the glibc malloc hooks.
<br>
<p><p><p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &lt;akpm_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: May 10, 2010 4:55:35 PM EDT
</span><br>
<span class="quotelev1">&gt; To: &lt;mm-commits_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: &lt;rolandd_at_[hidden]&gt;, &lt;a.p.zijlstra_at_[hidden]&gt;, &lt;ebmunson_at_[hidden]&gt;, &lt;hugh.dickins_at_[hidden]&gt;, &lt;jgunthorpe_at_[hidden]&gt;, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;, &lt;mel_at_[hidden]&gt;, &lt;mingo_at_[hidden]&gt;, &lt;sean.hefty_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: + ummunotify-userspace-support-for-mmu-notifications-v2.patch added to -mm tree
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The patch titled
</span><br>
<span class="quotelev1">&gt;      ummunotify: userspace support for MMU notifications V2
</span><br>
<span class="quotelev1">&gt; has been added to the -mm tree.  Its filename is
</span><br>
<span class="quotelev1">&gt;      ummunotify-userspace-support-for-mmu-notifications-v2.patch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Before you just go and hit &quot;reply&quot;, please:
</span><br>
<span class="quotelev1">&gt;    a) Consider who else should be cc'ed
</span><br>
<span class="quotelev1">&gt;    b) Prefer to cc a suitable mailing list as well
</span><br>
<span class="quotelev1">&gt;    c) Ideally: find the original patch on the mailing list and do a
</span><br>
<span class="quotelev1">&gt;       reply-to-all to that, adding suitable additional cc's
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Remember to use Documentation/SubmitChecklist when testing your code ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See <a href="http://userweb.kernel.org/~akpm/stuff/added-to-mm.txt">http://userweb.kernel.org/~akpm/stuff/added-to-mm.txt</a> to find
</span><br>
<span class="quotelev1">&gt; out what to do about this
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The current -mm tree may be found at <a href="http://userweb.kernel.org/~akpm/mmotm/">http://userweb.kernel.org/~akpm/mmotm/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Subject: ummunotify: userspace support for MMU notifications V2
</span><br>
<span class="quotelev1">&gt; From: Roland Dreier &lt;rolandd_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As discussed in
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://article.gmane.org/gmane.linux.drivers.openib/61925">http://article.gmane.org/gmane.linux.drivers.openib/61925</a>&gt; and follow-up
</span><br>
<span class="quotelev1">&gt; messages, libraries using RDMA would like to track precisely when
</span><br>
<span class="quotelev1">&gt; application code changes memory mapping via free(), munmap(), etc.
</span><br>
<span class="quotelev1">&gt; Current pure-userspace solutions using malloc hooks and other tricks are
</span><br>
<span class="quotelev1">&gt; not robust, and the feeling among experts is that the issue is unfixable
</span><br>
<span class="quotelev1">&gt; without kernel help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We solve this not by implementing the full API proposed in the email
</span><br>
<span class="quotelev1">&gt; linked above but rather with a simpler and more generic interface, which
</span><br>
<span class="quotelev1">&gt; may be useful in other contexts.  Specifically, we implement a new
</span><br>
<span class="quotelev1">&gt; character device driver, ummunotify, that creates a /dev/ummunotify node.
</span><br>
<span class="quotelev1">&gt; A userspace process can open this node read-only and use the fd as
</span><br>
<span class="quotelev1">&gt; follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  1. ioctl() to register/unregister an address range to watch in the
</span><br>
<span class="quotelev1">&gt;     kernel (cf struct ummunotify_register_ioctl in &lt;linux/ummunotify.h&gt;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  2. read() to retrieve events generated when a mapping in a watched
</span><br>
<span class="quotelev1">&gt;     address range is invalidated (cf struct ummunotify_event in
</span><br>
<span class="quotelev1">&gt;     &lt;linux/ummunotify.h&gt;).  select()/poll()/epoll() and SIGIO are
</span><br>
<span class="quotelev1">&gt;     handled for this IO.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  3. mmap() one page at offset 0 to map a kernel page that contains a
</span><br>
<span class="quotelev1">&gt;     generation counter that is incremented each time an event is
</span><br>
<span class="quotelev1">&gt;     generated.  This allows userspace to have a fast path that checks
</span><br>
<span class="quotelev1">&gt;     that no events have occurred without a system call.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks to Jason Gunthorpe for suggestions on the interface design.  Also
</span><br>
<span class="quotelev1">&gt; thanks to Jeff Squyres for prototyping support for this in Open MPI, which
</span><br>
<span class="quotelev1">&gt; helped find several bugs during development.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Signed-off-by: Roland Dreier &lt;rolandd_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Signed-off-by: Eric B Munson &lt;ebmunson_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: Jason Gunthorpe &lt;jgunthorpe_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: Peter Zijlstra &lt;a.p.zijlstra_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: Ingo Molnar &lt;mingo_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: Hugh Dickins &lt;hugh.dickins_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: Mel Gorman &lt;mel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: Sean Hefty &lt;sean.hefty_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Signed-off-by: Andrew Morton &lt;akpm_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Documentation/Makefile                  |    3
</span><br>
<span class="quotelev1">&gt;  Documentation/ummunotify/Makefile       |    7
</span><br>
<span class="quotelev1">&gt;  Documentation/ummunotify/ummunotify.txt |  162 ++++++
</span><br>
<span class="quotelev1">&gt;  Documentation/ummunotify/umn-test.c     |  200 +++++++
</span><br>
<span class="quotelev1">&gt;  drivers/char/Kconfig                    |   12
</span><br>
<span class="quotelev1">&gt;  drivers/char/Makefile                   |    1
</span><br>
<span class="quotelev1">&gt;  drivers/char/ummunotify.c               |  567 ++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;  include/linux/Kbuild                    |    1
</span><br>
<span class="quotelev1">&gt;  include/linux/ummunotify.h              |  121 ++++
</span><br>
<span class="quotelev1">&gt;  9 files changed, 1073 insertions(+), 1 deletion(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff -puN Documentation/Makefile~ummunotify-userspace-support-for-mmu-notifications-v2 Documentation/Makefile
</span><br>
<span class="quotelev1">&gt; --- a/Documentation/Makefile~ummunotify-userspace-support-for-mmu-notifications-v2
</span><br>
<span class="quotelev1">&gt; +++ a/Documentation/Makefile
</span><br>
<span class="quotelev1">&gt; @@ -1,3 +1,4 @@
</span><br>
<span class="quotelev1">&gt;  obj-m := DocBook/ accounting/ auxdisplay/ connector/ \
</span><br>
<span class="quotelev1">&gt;         filesystems/ filesystems/configfs/ ia64/ laptops/ networking/ \
</span><br>
<span class="quotelev1">&gt; -       pcmcia/ spi/ timers/ video4linux/ vm/ watchdog/src/
</span><br>
<span class="quotelev1">&gt; +       pcmcia/ spi/ timers/ video4linux/ vm/ ummunotify/ \
</span><br>
<span class="quotelev1">&gt; +       watchdog/src/
</span><br>
<span class="quotelev1">&gt; diff -puN /dev/null Documentation/ummunotify/Makefile
</span><br>
<span class="quotelev1">&gt; --- /dev/null
</span><br>
<span class="quotelev1">&gt; +++ a/Documentation/ummunotify/Makefile
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,7 @@
</span><br>
<span class="quotelev1">&gt; +# List of programs to build
</span><br>
<span class="quotelev1">&gt; +hostprogs-y := umn-test
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Tell kbuild to always build the programs
</span><br>
<span class="quotelev1">&gt; +always := $(hostprogs-y)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +HOSTCFLAGS_umn-test.o += -I$(objtree)/usr/include
</span><br>
<span class="quotelev1">&gt; diff -puN /dev/null Documentation/ummunotify/ummunotify.txt
</span><br>
<span class="quotelev1">&gt; --- /dev/null
</span><br>
<span class="quotelev1">&gt; +++ a/Documentation/ummunotify/ummunotify.txt
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,162 @@
</span><br>
<span class="quotelev1">&gt; +UMMUNOTIFY
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  Ummunotify relays MMU notifier events to userspace.  This is useful
</span><br>
<span class="quotelev1">&gt; +  for libraries that need to track the memory mapping of applications;
</span><br>
<span class="quotelev1">&gt; +  for example, MPI implementations using RDMA want to cache memory
</span><br>
<span class="quotelev1">&gt; +  registrations for performance, but tracking all possible crazy cases
</span><br>
<span class="quotelev1">&gt; +  such as when, say, the FORTRAN runtime frees memory is impossible
</span><br>
<span class="quotelev1">&gt; +  without kernel help.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Basic Model
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  A userspace process uses it by opening /dev/ummunotify, which
</span><br>
<span class="quotelev1">&gt; +  returns a file descriptor.  Interest in address ranges is registered
</span><br>
<span class="quotelev1">&gt; +  using ioctl() and MMU notifier events are retrieved using read(), as
</span><br>
<span class="quotelev1">&gt; +  described in more detail below.  Userspace can register multiple
</span><br>
<span class="quotelev1">&gt; +  address ranges to watch, and can unregister individual ranges.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  Userspace can also mmap() a single read-only page at offset 0 on
</span><br>
<span class="quotelev1">&gt; +  this file descriptor.  This page contains (at offest 0) a single
</span><br>
<span class="quotelev1">&gt; +  64-bit generation counter that the kernel increments each time an
</span><br>
<span class="quotelev1">&gt; +  MMU notifier event occurs.  Userspace can use this to very quickly
</span><br>
<span class="quotelev1">&gt; +  check if there are any events to retrieve without needing to do a
</span><br>
<span class="quotelev1">&gt; +  system call.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Control
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  To start using ummunotify, a process opens /dev/ummunotify in
</span><br>
<span class="quotelev1">&gt; +  read-only mode.  This will attach to current-&gt;mm because the current
</span><br>
<span class="quotelev1">&gt; +  consumers of this functionality do all monitoring in the process
</span><br>
<span class="quotelev1">&gt; +  being monitored.  It is currently not possible to use this device to
</span><br>
<span class="quotelev1">&gt; +  monitor other processes.  Control from userspace is done via ioctl().
</span><br>
<span class="quotelev1">&gt; +  An ioctl was chosen because the number of files required to register
</span><br>
<span class="quotelev1">&gt; +  a new address range in sysfs would be unwieldy and new procfs entries
</span><br>
<span class="quotelev1">&gt; +  are discouraged.  The defined ioctls are:
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    UMMUNOTIFY_EXCHANGE_FEATURES: This ioctl takes a single 32-bit
</span><br>
<span class="quotelev1">&gt; +      word of feature flags as input, and the kernel updates the
</span><br>
<span class="quotelev1">&gt; +      features flags word to contain only features requested by
</span><br>
<span class="quotelev1">&gt; +      userspace and also supported by the kernel.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +      This ioctl is only included for forward compatibility; no
</span><br>
<span class="quotelev1">&gt; +      feature flags are currently defined, and the kernel will simply
</span><br>
<span class="quotelev1">&gt; +      update any requested feature mask to 0.  The kernel will always
</span><br>
<span class="quotelev1">&gt; +      default to a feature mask of 0 if this ioctl is not used, so
</span><br>
<span class="quotelev1">&gt; +      current userspace does not need to perform this ioctl.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    UMMUNOTIFY_REGISTER_REGION: Userspace uses this ioctl to tell the
</span><br>
<span class="quotelev1">&gt; +      kernel to start delivering events for an address range.  The
</span><br>
<span class="quotelev1">&gt; +      range is described using struct ummunotify_register_ioctl:
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       struct ummunotify_register_ioctl {
</span><br>
<span class="quotelev1">&gt; +               __u64   start;
</span><br>
<span class="quotelev1">&gt; +               __u64   end;
</span><br>
<span class="quotelev1">&gt; +               __u64   user_cookie;
</span><br>
<span class="quotelev1">&gt; +               __u32   flags;
</span><br>
<span class="quotelev1">&gt; +               __u32   reserved;
</span><br>
<span class="quotelev1">&gt; +       };
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +      start and end give the range of userspace virtual addresses;
</span><br>
<span class="quotelev1">&gt; +      start is included in the range and end is not, so an example of
</span><br>
<span class="quotelev1">&gt; +      a 4 KB range would be start=0x1000, end=0x2000.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +      user_cookie is an opaque 64-bit quantity that is returned by the
</span><br>
<span class="quotelev1">&gt; +      kernel in events involving the range, and used by userspace to
</span><br>
<span class="quotelev1">&gt; +      stop watching the range.  Each registered address range must
</span><br>
<span class="quotelev1">&gt; +      have a distinct user_cookie.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +      It is fine with the kernel if userspace registers multiple
</span><br>
<span class="quotelev1">&gt; +      overlapping or even duplicate address ranges, as long as a
</span><br>
<span class="quotelev1">&gt; +      different cookie is used for each registration.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +      flags and reserved are included for forward compatibility;
</span><br>
<span class="quotelev1">&gt; +      userspace should simply set them to 0 for the current interface.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    UMMUNOTIFY_UNREGISTER_REGION: Userspace passes in the 64-bit
</span><br>
<span class="quotelev1">&gt; +      user_cookie used to register a range to tell the kernel to stop
</span><br>
<span class="quotelev1">&gt; +      watching an address range.  Once this ioctl completes, the
</span><br>
<span class="quotelev1">&gt; +      kernel will not deliver any further events for the range that is
</span><br>
<span class="quotelev1">&gt; +      unregistered.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Events
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  When an event occurs that invalidates some of a process's memory
</span><br>
<span class="quotelev1">&gt; +  mapping in an address range being watched, ummunotify queues an
</span><br>
<span class="quotelev1">&gt; +  event report for that address range.  If more than one event
</span><br>
<span class="quotelev1">&gt; +  invalidates parts of the same address range before userspace
</span><br>
<span class="quotelev1">&gt; +  retrieves the queued report, then further reports for the same range
</span><br>
<span class="quotelev1">&gt; +  will not be queued -- when userspace does read the queue, only a
</span><br>
<span class="quotelev1">&gt; +  single report for a given range will be returned.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  If multiple ranges being watched are invalidated by a single event
</span><br>
<span class="quotelev1">&gt; +  (which is especially likely if userspace registers overlapping
</span><br>
<span class="quotelev1">&gt; +  ranges), then an event report structure will be queued for each
</span><br>
<span class="quotelev1">&gt; +  address range registration.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  It is possible, if a large enough number of overlapping ranges are
</span><br>
<span class="quotelev1">&gt; +  registered and the list of invalidated events is busy enough and
</span><br>
<span class="quotelev1">&gt; +  ignored long enough, to cause the kernel to run out of memory.
</span><br>
<span class="quotelev1">&gt; +  Because this situation is unlikely to occur, the event queue size
</span><br>
<span class="quotelev1">&gt; +  is not bounded in order to avoid dropping events if the queue grows
</span><br>
<span class="quotelev1">&gt; +  beyond set bounds.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  Userspace retrieves queued events via read() on the ummunotify file
</span><br>
<span class="quotelev1">&gt; +  descriptor; a buffer that is at least as big as struct
</span><br>
<span class="quotelev1">&gt; +  ummunotify_event should be used to retrieve event reports, and if a
</span><br>
<span class="quotelev1">&gt; +  larger buffer is passed to read(), multiple reports will be returned
</span><br>
<span class="quotelev1">&gt; +  (if available).
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  If the ummunotify file descriptor is in blocking mode, a read() call
</span><br>
<span class="quotelev1">&gt; +  will wait for an event report to be available.  Userspace may also
</span><br>
<span class="quotelev1">&gt; +  set the ummunotify file descriptor to non-blocking mode and use all
</span><br>
<span class="quotelev1">&gt; +  standard ways of waiting for data to be available on the ummunotify
</span><br>
<span class="quotelev1">&gt; +  file descriptor, including epoll/poll()/select() and SIGIO.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  The format of event reports is:
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       struct ummunotify_event {
</span><br>
<span class="quotelev1">&gt; +               __u32   type;
</span><br>
<span class="quotelev1">&gt; +               __u32   flags;
</span><br>
<span class="quotelev1">&gt; +               __u64   hint_start;
</span><br>
<span class="quotelev1">&gt; +               __u64   hint_end;
</span><br>
<span class="quotelev1">&gt; +               __u64   user_cookie_counter;
</span><br>
<span class="quotelev1">&gt; +       };
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  where the type field is either UMMUNOTIFY_EVENT_TYPE_INVAL or
</span><br>
<span class="quotelev1">&gt; +  UMMUNOTIFY_EVENT_TYPE_LAST.  Events of type INVAL describe
</span><br>
<span class="quotelev1">&gt; +  invalidation events as follows: user_cookie_counter contains the
</span><br>
<span class="quotelev1">&gt; +  cookie passed in when userspace registered the range that the event
</span><br>
<span class="quotelev1">&gt; +  is for.  hint_start and hint_end contain the start address and end
</span><br>
<span class="quotelev1">&gt; +  address that were invalidated.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  The flags word contains bit flags, with only UMMUNOTIFY_EVENT_FLAG_HINT
</span><br>
<span class="quotelev1">&gt; +  defined at the moment.  If HINT is set, then the invalidation event
</span><br>
<span class="quotelev1">&gt; +  invalidated less than the full address range and the kernel returns
</span><br>
<span class="quotelev1">&gt; +  the exact range invalidated; if HINT is not sent then hint_start and
</span><br>
<span class="quotelev1">&gt; +  hint_end are set to the original range registered by userspace.
</span><br>
<span class="quotelev1">&gt; +  (HINT will not be set if, for example, multiple events invalidated
</span><br>
<span class="quotelev1">&gt; +  disjoint parts of the range and so a single start/end pair cannot
</span><br>
<span class="quotelev1">&gt; +  represent the parts of the range that were invalidated)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  If the event type is LAST, then the read operation has emptied the
</span><br>
<span class="quotelev1">&gt; +  list of invalidated regions, and the flags, hint_start and hint_end
</span><br>
<span class="quotelev1">&gt; +  fields are not used.  user_cookie_counter holds the value of the
</span><br>
<span class="quotelev1">&gt; +  kernel's generation counter (see below of more details) when the
</span><br>
<span class="quotelev1">&gt; +  empty list occurred.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Generation Count
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  Userspace may mmap() a page on a ummunotify file descriptor via
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       mmap(NULL, sizeof (__u64), PROT_READ, MAP_SHARED, ummunotify_fd, 0);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  to get a read-only mapping of the kernel's 64-bit generation
</span><br>
<span class="quotelev1">&gt; +  counter.  The kernel will increment this generation counter each
</span><br>
<span class="quotelev1">&gt; +  time an event report is queued.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  Userspace can use the generation counter as a quick check to avoid
</span><br>
<span class="quotelev1">&gt; +  system calls; if the value read from the mapped kernel counter is
</span><br>
<span class="quotelev1">&gt; +  still equal to the value returned in user_cookie_counter for the
</span><br>
<span class="quotelev1">&gt; +  most recent LAST event retrieved, then no further events have been
</span><br>
<span class="quotelev1">&gt; +  queued and there is no need to try a read() on the ummunotify file
</span><br>
<span class="quotelev1">&gt; +  descriptor.
</span><br>
<span class="quotelev1">&gt; diff -puN /dev/null Documentation/ummunotify/umn-test.c
</span><br>
<span class="quotelev1">&gt; --- /dev/null
</span><br>
<span class="quotelev1">&gt; +++ a/Documentation/ummunotify/umn-test.c
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,200 @@
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2009 Cisco Systems.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * This program is free software; you can redistribute it and/or
</span><br>
<span class="quotelev1">&gt; + * modify it under the terms of the GNU General Public License version
</span><br>
<span class="quotelev1">&gt; + * 2 as published by the Free Software Foundation.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * THE SOFTWARE IS PROVIDED &quot;AS IS&quot;, WITHOUT WARRANTY OF ANY KIND,
</span><br>
<span class="quotelev1">&gt; + * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
</span><br>
<span class="quotelev1">&gt; + * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
</span><br>
<span class="quotelev1">&gt; + * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS
</span><br>
<span class="quotelev1">&gt; + * BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
</span><br>
<span class="quotelev1">&gt; + * ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
</span><br>
<span class="quotelev1">&gt; + * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
</span><br>
<span class="quotelev1">&gt; + * SOFTWARE.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#include &lt;stdint.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;fcntl.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#include &lt;linux/ummunotify.h&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#include &lt;sys/mman.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;sys/stat.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;sys/ioctl.h&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#define UMN_TEST_COOKIE 123
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static int             umn_fd;
</span><br>
<span class="quotelev1">&gt; +static volatile __u64  *umn_counter;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static int umn_init(void)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +       __u32 flags;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       umn_fd = open(&quot;/dev/ummunotify&quot;, O_RDONLY);
</span><br>
<span class="quotelev1">&gt; +       if (umn_fd &lt; 0) {
</span><br>
<span class="quotelev1">&gt; +               perror(&quot;open&quot;);
</span><br>
<span class="quotelev1">&gt; +               return 1;
</span><br>
<span class="quotelev1">&gt; +       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       if (ioctl(umn_fd, UMMUNOTIFY_EXCHANGE_FEATURES, &amp;flags)) {
</span><br>
<span class="quotelev1">&gt; +               perror(&quot;exchange ioctl&quot;);
</span><br>
<span class="quotelev1">&gt; +               return 1;
</span><br>
<span class="quotelev1">&gt; +       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       printf(&quot;kernel feature flags: 0x%08x\n&quot;, flags);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       umn_counter = mmap(NULL, sizeof *umn_counter, PROT_READ,
</span><br>
<span class="quotelev1">&gt; +                          MAP_SHARED, umn_fd, 0);
</span><br>
<span class="quotelev1">&gt; +       if (umn_counter == MAP_FAILED) {
</span><br>
<span class="quotelev1">&gt; +               perror(&quot;mmap&quot;);
</span><br>
<span class="quotelev1">&gt; +               return 1;
</span><br>
<span class="quotelev1">&gt; +       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       return 0;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static int umn_register(void *buf, size_t size, __u64 cookie)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +       struct ummunotify_register_ioctl r = {
</span><br>
<span class="quotelev1">&gt; +               .start          = (unsigned long) buf,
</span><br>
<span class="quotelev1">&gt; +               .end            = (unsigned long) buf + size,
</span><br>
<span class="quotelev1">&gt; +               .user_cookie    = cookie,
</span><br>
<span class="quotelev1">&gt; +       };
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       if (ioctl(umn_fd, UMMUNOTIFY_REGISTER_REGION, &amp;r)) {
</span><br>
<span class="quotelev1">&gt; +               perror(&quot;register ioctl&quot;);
</span><br>
<span class="quotelev1">&gt; +               return 1;
</span><br>
<span class="quotelev1">&gt; +       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       return 0;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static int umn_unregister(__u64 cookie)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +       if (ioctl(umn_fd, UMMUNOTIFY_UNREGISTER_REGION, &amp;cookie)) {
</span><br>
<span class="quotelev1">&gt; +               perror(&quot;unregister ioctl&quot;);
</span><br>
<span class="quotelev1">&gt; +               return 1;
</span><br>
<span class="quotelev1">&gt; +       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       return 0;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +       int                     page_size;
</span><br>
<span class="quotelev1">&gt; +       __u64                   old_counter;
</span><br>
<span class="quotelev1">&gt; +       void                   *t;
</span><br>
<span class="quotelev1">&gt; +       int                     got_it;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       if (umn_init())
</span><br>
<span class="quotelev1">&gt; +               return 1;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       printf(&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       old_counter = *umn_counter;
</span><br>
<span class="quotelev1">&gt; +       if (old_counter != 0) {
</span><br>
<span class="quotelev1">&gt; +               fprintf(stderr, &quot;counter = %lld (expected 0)\n&quot;, old_counter);
</span><br>
<span class="quotelev1">&gt; +               return 1;
</span><br>
<span class="quotelev1">&gt; +       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       page_size = sysconf(_SC_PAGESIZE);
</span><br>
<span class="quotelev1">&gt; +       t = mmap(NULL, 3 * page_size, PROT_READ,
</span><br>
<span class="quotelev1">&gt; +                MAP_PRIVATE | MAP_ANONYMOUS | MAP_POPULATE, -1, 0);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       if (umn_register(t, 3 * page_size, UMN_TEST_COOKIE))
</span><br>
<span class="quotelev1">&gt; +               return 1;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       munmap(t + page_size, page_size);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       old_counter = *umn_counter;
</span><br>
<span class="quotelev1">&gt; +       if (old_counter != 1) {
</span><br>
<span class="quotelev1">&gt; +               fprintf(stderr, &quot;counter = %lld (expected 1)\n&quot;, old_counter);
</span><br>
<span class="quotelev1">&gt; +               return 1;
</span><br>
<span class="quotelev1">&gt; +       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       got_it = 0;
</span><br>
<span class="quotelev1">&gt; +       while (1) {
</span><br>
<span class="quotelev1">&gt; +               struct ummunotify_event ev;
</span><br>
<span class="quotelev1">&gt; +               int                     len;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +               len = read(umn_fd, &amp;ev, sizeof ev);
</span><br>
<span class="quotelev1">&gt; +               if (len &lt; 0) {
</span><br>
<span class="quotelev1">&gt; +                       perror(&quot;read event&quot;);
</span><br>
<span class="quotelev1">&gt; +                       return 1;
</span><br>
<span class="quotelev1">&gt; +               }
</span><br>
<span class="quotelev1">&gt; +               if (len != sizeof ev) {
</span><br>
<span class="quotelev1">&gt; +                       fprintf(stderr, &quot;Read gave %d bytes (!= event size %zd)\n&quot;,
</span><br>
<span class="quotelev1">&gt; +                               len, sizeof ev);
</span><br>
<span class="quotelev1">&gt; +                       return 1;
</span><br>
<span class="quotelev1">&gt; +               }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +               switch (ev.type) {
</span><br>
<span class="quotelev1">&gt; +               case UMMUNOTIFY_EVENT_TYPE_INVAL:
</span><br>
<span class="quotelev1">&gt; +                       if (got_it) {
</span><br>
<span class="quotelev1">&gt; +                               fprintf(stderr, &quot;Extra invalidate event\n&quot;);
</span><br>
<span class="quotelev1">&gt; +                               return 1;
</span><br>
<span class="quotelev1">&gt; +                       }
</span><br>
<span class="quotelev1">&gt; +                       if (ev.user_cookie_counter != UMN_TEST_COOKIE) {
</span><br>
<span class="quotelev1">&gt; +                               fprintf(stderr, &quot;Invalidate event for cookie %lld (expected %d)\n&quot;,
</span><br>
<span class="quotelev1">&gt; +                                       ev.user_cookie_counter,
</span><br>
<span class="quotelev1">&gt; +                                       UMN_TEST_COOKIE);
</span><br>
<span class="quotelev1">&gt; +                               return 1;
</span><br>
<span class="quotelev1">&gt; +                       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                       printf(&quot;Invalidate event:\tcookie %lld\n&quot;,
</span><br>
<span class="quotelev1">&gt; +                              ev.user_cookie_counter);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                       if (!(ev.flags &amp; UMMUNOTIFY_EVENT_FLAG_HINT)) {
</span><br>
<span class="quotelev1">&gt; +                               fprintf(stderr, &quot;Hint flag not set\n&quot;);
</span><br>
<span class="quotelev1">&gt; +                               return 1;
</span><br>
<span class="quotelev1">&gt; +                       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                       if (ev.hint_start != (uintptr_t) t + page_size ||
</span><br>
<span class="quotelev1">&gt; +                           ev.hint_end != (uintptr_t) t + page_size * 2) {
</span><br>
<span class="quotelev1">&gt; +                               fprintf(stderr, &quot;Got hint %llx..%llx, expected %p..%p\n&quot;,
</span><br>
<span class="quotelev1">&gt; +                                       ev.hint_start, ev.hint_end,
</span><br>
<span class="quotelev1">&gt; +                                       t + page_size, t + page_size * 2);
</span><br>
<span class="quotelev1">&gt; +                               return 1;
</span><br>
<span class="quotelev1">&gt; +                       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                       printf(&quot;\t\t\thint %llx...%llx\n&quot;,
</span><br>
<span class="quotelev1">&gt; +                              ev.hint_start, ev.hint_end);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                       got_it = 1;
</span><br>
<span class="quotelev1">&gt; +                       break;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +               case UMMUNOTIFY_EVENT_TYPE_LAST:
</span><br>
<span class="quotelev1">&gt; +                       if (!got_it) {
</span><br>
<span class="quotelev1">&gt; +                               fprintf(stderr, &quot;Last event without invalidate event\n&quot;);
</span><br>
<span class="quotelev1">&gt; +                               return 1;
</span><br>
<span class="quotelev1">&gt; +                       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                       printf(&quot;Empty event:\t\tcounter %lld\n&quot;,
</span><br>
<span class="quotelev1">&gt; +                              ev.user_cookie_counter);
</span><br>
<span class="quotelev1">&gt; +                       goto done;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +               default:
</span><br>
<span class="quotelev1">&gt; +                       fprintf(stderr, &quot;unknown event type %d\n&quot;,
</span><br>
<span class="quotelev1">&gt; +                               ev.type);
</span><br>
<span class="quotelev1">&gt; +                       return 1;
</span><br>
<span class="quotelev1">&gt; +               }
</span><br>
<span class="quotelev1">&gt; +       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +done:
</span><br>
<span class="quotelev1">&gt; +       umn_unregister(123);
</span><br>
<span class="quotelev1">&gt; +       munmap(t, page_size);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       old_counter = *umn_counter;
</span><br>
<span class="quotelev1">&gt; +       if (old_counter != 1) {
</span><br>
<span class="quotelev1">&gt; +               fprintf(stderr, &quot;counter = %lld (expected 1)\n&quot;, old_counter);
</span><br>
<span class="quotelev1">&gt; +               return 1;
</span><br>
<span class="quotelev1">&gt; +       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       return 0;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; diff -puN drivers/char/Kconfig~ummunotify-userspace-support-for-mmu-notifications-v2 drivers/char/Kconfig
</span><br>
<span class="quotelev1">&gt; --- a/drivers/char/Kconfig~ummunotify-userspace-support-for-mmu-notifications-v2
</span><br>
<span class="quotelev1">&gt; +++ a/drivers/char/Kconfig
</span><br>
<span class="quotelev1">&gt; @@ -1119,6 +1119,18 @@ config DEVPORT
</span><br>
<span class="quotelev1">&gt;         depends on ISA || PCI
</span><br>
<span class="quotelev1">&gt;         default y
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +config UMMUNOTIFY
</span><br>
<span class="quotelev1">&gt; +       tristate &quot;Userspace MMU notifications&quot;
</span><br>
<span class="quotelev1">&gt; +       select MMU_NOTIFIER
</span><br>
<span class="quotelev1">&gt; +       help
</span><br>
<span class="quotelev1">&gt; +         The ummunotify (userspace MMU notification) driver creates a
</span><br>
<span class="quotelev1">&gt; +         character device that can be used by userspace libraries to
</span><br>
<span class="quotelev1">&gt; +         get notifications when an application's memory mapping
</span><br>
<span class="quotelev1">&gt; +         changed.  This is used, for example, by RDMA libraries to
</span><br>
<span class="quotelev1">&gt; +         improve the reliability of memory registration caching, since
</span><br>
<span class="quotelev1">&gt; +         the kernel's MMU notifications can be used to know precisely
</span><br>
<span class="quotelev1">&gt; +         when to shoot down a cached registration.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  source &quot;drivers/s390/char/Kconfig&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  endmenu
</span><br>
<span class="quotelev1">&gt; diff -puN drivers/char/Makefile~ummunotify-userspace-support-for-mmu-notifications-v2 drivers/char/Makefile
</span><br>
<span class="quotelev1">&gt; --- a/drivers/char/Makefile~ummunotify-userspace-support-for-mmu-notifications-v2
</span><br>
<span class="quotelev1">&gt; +++ a/drivers/char/Makefile
</span><br>
<span class="quotelev1">&gt; @@ -98,6 +98,7 @@ obj-$(CONFIG_NSC_GPIO)                += nsc_gpio.o
</span><br>
<span class="quotelev1">&gt;  obj-$(CONFIG_CS5535_GPIO)      += cs5535_gpio.o
</span><br>
<span class="quotelev1">&gt;  obj-$(CONFIG_GPIO_TB0219)      += tb0219.o
</span><br>
<span class="quotelev1">&gt;  obj-$(CONFIG_TELCLOCK)         += tlclk.o
</span><br>
<span class="quotelev1">&gt; +obj-$(CONFIG_UMMUNOTIFY)       += ummunotify.o
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  obj-$(CONFIG_MWAVE)            += mwave/
</span><br>
<span class="quotelev1">&gt;  obj-$(CONFIG_AGP)              += agp/
</span><br>
<span class="quotelev1">&gt; diff -puN /dev/null drivers/char/ummunotify.c
</span><br>
<span class="quotelev1">&gt; --- /dev/null
</span><br>
<span class="quotelev1">&gt; +++ a/drivers/char/ummunotify.c
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,567 @@
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2009 Cisco Systems.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * This program is free software; you can redistribute it and/or
</span><br>
<span class="quotelev1">&gt; + * modify it under the terms of the GNU General Public License version
</span><br>
<span class="quotelev1">&gt; + * 2 as published by the Free Software Foundation.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * THE SOFTWARE IS PROVIDED &quot;AS IS&quot;, WITHOUT WARRANTY OF ANY KIND,
</span><br>
<span class="quotelev1">&gt; + * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
</span><br>
<span class="quotelev1">&gt; + * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
</span><br>
<span class="quotelev1">&gt; + * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS
</span><br>
<span class="quotelev1">&gt; + * BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
</span><br>
<span class="quotelev1">&gt; + * ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
</span><br>
<span class="quotelev1">&gt; + * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
</span><br>
<span class="quotelev1">&gt; + * SOFTWARE.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#include &lt;linux/fs.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;linux/init.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;linux/list.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;linux/miscdevice.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;linux/mm.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;linux/mmu_notifier.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;linux/module.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;linux/poll.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;linux/rbtree.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;linux/sched.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;linux/slab.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;linux/spinlock.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;linux/uaccess.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;linux/ummunotify.h&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#include &lt;asm/cacheflush.h&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +MODULE_AUTHOR(&quot;Roland Dreier&quot;);
</span><br>
<span class="quotelev1">&gt; +MODULE_DESCRIPTION(&quot;Userspace MMU notifiers&quot;);
</span><br>
<span class="quotelev1">&gt; +MODULE_LICENSE(&quot;GPL v2&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * Information about an address range userspace has asked us to watch.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * user_cookie: Opaque cookie given to us when userspace registers the
</span><br>
<span class="quotelev1">&gt; + *   address range.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * start, end: Address range; start is inclusive, end is exclusive.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * hint_start, hint_end: If a single MMU notification event
</span><br>
<span class="quotelev1">&gt; + *   invalidates the address range, we hold the actual range of
</span><br>
<span class="quotelev1">&gt; + *   addresses that were invalidated (and set UMMUNOTIFY_FLAG_HINT).
</span><br>
<span class="quotelev1">&gt; + *   If another event hits this range before userspace reads the
</span><br>
<span class="quotelev1">&gt; + *   event, we give up and don't try to keep track of which subsets
</span><br>
<span class="quotelev1">&gt; + *   got invalidated.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * flags: Holds the INVALID flag for ranges that are on the invalid
</span><br>
<span class="quotelev1">&gt; + *   list and/or the HINT flag for ranges where the hint range holds
</span><br>
<span class="quotelev1">&gt; + *   good information.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * node: Used to put the range into an rbtree we use to be able to
</span><br>
<span class="quotelev1">&gt; + *   scan address ranges in order.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * list: Used to put the range on the invalid list when an MMU
</span><br>
<span class="quotelev1">&gt; + *   notification event hits the range.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +enum {
</span><br>
<span class="quotelev1">&gt; +       UMMUNOTIFY_FLAG_INVALID = 1,
</span><br>
<span class="quotelev1">&gt; +       UMMUNOTIFY_FLAG_HINT    = 2,
</span><br>
<span class="quotelev1">&gt; +};
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +struct ummunotify_reg {
</span><br>
<span class="quotelev1">&gt; +       u64                     user_cookie;
</span><br>
<span class="quotelev1">&gt; +       unsigned long           start;
</span><br>
<span class="quotelev1">&gt; +       unsigned long           end;
</span><br>
<span class="quotelev1">&gt; +       unsigned long           hint_start;
</span><br>
<span class="quotelev1">&gt; +       unsigned long           hint_end;
</span><br>
<span class="quotelev1">&gt; +       unsigned long           flags;
</span><br>
<span class="quotelev1">&gt; +       struct rb_node          node;
</span><br>
<span class="quotelev1">&gt; +       struct list_head        list;
</span><br>
<span class="quotelev1">&gt; +};
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * Context attached to each file that userspace opens.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * mmu_notifier: MMU notifier registered for this context.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * mm: mm_struct for process that created the context; we use this to
</span><br>
<span class="quotelev1">&gt; + *   hold a reference to the mm to make sure it doesn't go away until
</span><br>
<span class="quotelev1">&gt; + *   we're done with it.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * reg_tree: RB tree of address ranges being watched, sorted by start
</span><br>
<span class="quotelev1">&gt; + *   address.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * invalid_list: List of address ranges that have been invalidated by
</span><br>
<span class="quotelev1">&gt; + *   MMU notification events; as userspace reads events, the address
</span><br>
<span class="quotelev1">&gt; + *   range corresponding to the event is removed from the list.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * counter: Page that can be mapped read-only by userspace, which
</span><br>
<span class="quotelev1">&gt; + *   holds a generation count that is incremented each time an event
</span><br>
<span class="quotelev1">&gt; + *   occurs.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * lock: Spinlock used to protect all context.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * read_wait: Wait queue used to wait for data to become available in
</span><br>
<span class="quotelev1">&gt; + *   blocking read()s.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * async_queue: Used to implement fasync().
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * need_empty: Set when userspace reads an invalidation event, so that
</span><br>
<span class="quotelev1">&gt; + *   read() knows it must generate an &quot;empty&quot; event when userspace
</span><br>
<span class="quotelev1">&gt; + *   drains the invalid_list.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * used: Set after userspace does anything with the file, so that the
</span><br>
<span class="quotelev1">&gt; + *   &quot;exchange flags&quot; ioctl() knows it's too late to change anything.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +struct ummunotify_file {
</span><br>
<span class="quotelev1">&gt; +       struct mmu_notifier     mmu_notifier;
</span><br>
<span class="quotelev1">&gt; +       struct mm_struct       *mm;
</span><br>
<span class="quotelev1">&gt; +       struct rb_root          reg_tree;
</span><br>
<span class="quotelev1">&gt; +       struct list_head        invalid_list;
</span><br>
<span class="quotelev1">&gt; +       u64                    *counter;
</span><br>
<span class="quotelev1">&gt; +       spinlock_t              lock;
</span><br>
<span class="quotelev1">&gt; +       wait_queue_head_t       read_wait;
</span><br>
<span class="quotelev1">&gt; +       struct fasync_struct   *async_queue;
</span><br>
<span class="quotelev1">&gt; +       int                     need_empty;
</span><br>
<span class="quotelev1">&gt; +       int                     used;
</span><br>
<span class="quotelev1">&gt; +};
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static void ummunotify_handle_notify(struct mmu_notifier *mn,
</span><br>
<span class="quotelev1">&gt; +                                    unsigned long start, unsigned long end)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +       struct ummunotify_file *priv =
</span><br>
<span class="quotelev1">&gt; +               container_of(mn, struct ummunotify_file, mmu_notifier);
</span><br>
<span class="quotelev1">&gt; +       struct rb_node *n;
</span><br>
<span class="quotelev1">&gt; +       struct ummunotify_reg *reg;
</span><br>
<span class="quotelev1">&gt; +       unsigned long flags;
</span><br>
<span class="quotelev1">&gt; +       int hit = 0;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       spin_lock_irqsave(&amp;priv-&gt;lock, flags);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       for (n = rb_first(&amp;priv-&gt;reg_tree); n; n = rb_next(n)) {
</span><br>
<span class="quotelev1">&gt; +               reg = rb_entry(n, struct ummunotify_reg, node);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +               /*
</span><br>
<span class="quotelev1">&gt; +                * Ranges overlap if they're not disjoint; and they're
</span><br>
<span class="quotelev1">&gt; +                * disjoint if the end of one is before the start of
</span><br>
<span class="quotelev1">&gt; +                * the other one.  So if both disjointness comparisons
</span><br>
<span class="quotelev1">&gt; +                * fail then the ranges overlap.
</span><br>
<span class="quotelev1">&gt; +                *
</span><br>
<span class="quotelev1">&gt; +                * Since we keep the tree of regions we're watching
</span><br>
<span class="quotelev1">&gt; +                * sorted by start address, we can end this loop as
</span><br>
<span class="quotelev1">&gt; +                * soon as we hit a region that starts past the end of
</span><br>
<span class="quotelev1">&gt; +                * the range for the event we're handling.
</span><br>
<span class="quotelev1">&gt; +                */
</span><br>
<span class="quotelev1">&gt; +               if (reg-&gt;start &gt;= end)
</span><br>
<span class="quotelev1">&gt; +                       break;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +               /*
</span><br>
<span class="quotelev1">&gt; +                * Just go to the next region if the start of the
</span><br>
<span class="quotelev1">&gt; +                * range is after the end of the region -- there
</span><br>
<span class="quotelev1">&gt; +                * might still be more overlapping ranges that have a
</span><br>
<span class="quotelev1">&gt; +                * greater start.
</span><br>
<span class="quotelev1">&gt; +                */
</span><br>
<span class="quotelev1">&gt; +               if (start &gt;= reg-&gt;end)
</span><br>
<span class="quotelev1">&gt; +                       continue;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +               hit = 1;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +               if (test_and_set_bit(UMMUNOTIFY_FLAG_INVALID, &amp;reg-&gt;flags)) {
</span><br>
<span class="quotelev1">&gt; +                       /* Already on invalid list */
</span><br>
<span class="quotelev1">&gt; +                       clear_bit(UMMUNOTIFY_FLAG_HINT, &amp;reg-&gt;flags);
</span><br>
<span class="quotelev1">&gt; +               } else {
</span><br>
<span class="quotelev1">&gt; +                       list_add_tail(&amp;reg-&gt;list, &amp;priv-&gt;invalid_list);
</span><br>
<span class="quotelev1">&gt; +                       set_bit(UMMUNOTIFY_FLAG_HINT, &amp;reg-&gt;flags);
</span><br>
<span class="quotelev1">&gt; +                       reg-&gt;hint_start = start;
</span><br>
<span class="quotelev1">&gt; +                       reg-&gt;hint_end   = end;
</span><br>
<span class="quotelev1">&gt; +               }
</span><br>
<span class="quotelev1">&gt; +       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       if (hit) {
</span><br>
<span class="quotelev1">&gt; +               ++(*priv-&gt;counter);
</span><br>
<span class="quotelev1">&gt; +               flush_dcache_page(virt_to_page(priv-&gt;counter));
</span><br>
<span class="quotelev1">&gt; +               wake_up_interruptible(&amp;priv-&gt;read_wait);
</span><br>
<span class="quotelev1">&gt; +               kill_fasync(&amp;priv-&gt;async_queue, SIGIO, POLL_IN);
</span><br>
<span class="quotelev1">&gt; +       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       spin_unlock_irqrestore(&amp;priv-&gt;lock, flags);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static void ummunotify_invalidate_page(struct mmu_notifier *mn,
</span><br>
<span class="quotelev1">&gt; +                                      struct mm_struct *mm,
</span><br>
<span class="quotelev1">&gt; +                                      unsigned long addr)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +       ummunotify_handle_notify(mn, addr, addr + PAGE_SIZE);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static void ummunotify_invalidate_range_start(struct mmu_notifier *mn,
</span><br>
<span class="quotelev1">&gt; +                                             struct mm_struct *mm,
</span><br>
<span class="quotelev1">&gt; +                                             unsigned long start,
</span><br>
<span class="quotelev1">&gt; +                                             unsigned long end)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +       ummunotify_handle_notify(mn, start, end);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static const struct mmu_notifier_ops ummunotify_mmu_notifier_ops = {
</span><br>
<span class="quotelev1">&gt; +       .invalidate_page        = ummunotify_invalidate_page,
</span><br>
<span class="quotelev1">&gt; +       .invalidate_range_start = ummunotify_invalidate_range_start,
</span><br>
<span class="quotelev1">&gt; +};
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static int ummunotify_open(struct inode *inode, struct file *filp)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +       struct ummunotify_file *priv;
</span><br>
<span class="quotelev1">&gt; +       int ret;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       if (filp-&gt;f_mode &amp; FMODE_WRITE)
</span><br>
<span class="quotelev1">&gt; +               return -EINVAL;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       priv = kmalloc(sizeof *priv, GFP_KERNEL);
</span><br>
<span class="quotelev1">&gt; +       if (!priv)
</span><br>
<span class="quotelev1">&gt; +               return -ENOMEM;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       priv-&gt;counter = (void *) get_zeroed_page(GFP_KERNEL);
</span><br>
<span class="quotelev1">&gt; +       if (!priv-&gt;counter) {
</span><br>
<span class="quotelev1">&gt; +               ret = -ENOMEM;
</span><br>
<span class="quotelev1">&gt; +               goto err;
</span><br>
<span class="quotelev1">&gt; +       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       priv-&gt;reg_tree = RB_ROOT;
</span><br>
<span class="quotelev1">&gt; +       INIT_LIST_HEAD(&amp;priv-&gt;invalid_list);
</span><br>
<span class="quotelev1">&gt; +       spin_lock_init(&amp;priv-&gt;lock);
</span><br>
<span class="quotelev1">&gt; +       init_waitqueue_head(&amp;priv-&gt;read_wait);
</span><br>
<span class="quotelev1">&gt; +       priv-&gt;async_queue = NULL;
</span><br>
<span class="quotelev1">&gt; +       priv-&gt;need_empty  = 0;
</span><br>
<span class="quotelev1">&gt; +       priv-&gt;used        = 0;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       priv-&gt;mmu_notifier.ops = &amp;ummunotify_mmu_notifier_ops;
</span><br>
<span class="quotelev1">&gt; +       /*
</span><br>
<span class="quotelev1">&gt; +        * Register notifier last, since notifications can occur as
</span><br>
<span class="quotelev1">&gt; +        * soon as we register....
</span><br>
<span class="quotelev1">&gt; +        */
</span><br>
<span class="quotelev1">&gt; +       ret = mmu_notifier_register(&amp;priv-&gt;mmu_notifier, current-&gt;mm);
</span><br>
<span class="quotelev1">&gt; +       if (ret)
</span><br>
<span class="quotelev1">&gt; +               goto err_page;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       priv-&gt;mm = current-&gt;mm;
</span><br>
<span class="quotelev1">&gt; +       atomic_inc(&amp;priv-&gt;mm-&gt;mm_count);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       filp-&gt;private_data = priv;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       return 0;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +err_page:
</span><br>
<span class="quotelev1">&gt; +       free_page((unsigned long) priv-&gt;counter);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +err:
</span><br>
<span class="quotelev1">&gt; +       kfree(priv);
</span><br>
<span class="quotelev1">&gt; +       return ret;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static int ummunotify_close(struct inode *inode, struct file *filp)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +       struct ummunotify_file *priv = filp-&gt;private_data;
</span><br>
<span class="quotelev1">&gt; +       struct rb_node *n;
</span><br>
<span class="quotelev1">&gt; +       struct ummunotify_reg *reg;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       mmu_notifier_unregister(&amp;priv-&gt;mmu_notifier, priv-&gt;mm);
</span><br>
<span class="quotelev1">&gt; +       mmdrop(priv-&gt;mm);
</span><br>
<span class="quotelev1">&gt; +       free_page((unsigned long) priv-&gt;counter);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       for (n = rb_first(&amp;priv-&gt;reg_tree); n; n = rb_next(n)) {
</span><br>
<span class="quotelev1">&gt; +               reg = rb_entry(n, struct ummunotify_reg, node);
</span><br>
<span class="quotelev1">&gt; +               kfree(reg);
</span><br>
<span class="quotelev1">&gt; +       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       kfree(priv);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       return 0;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static bool ummunotify_readable(struct ummunotify_file *priv)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +       return priv-&gt;need_empty || !list_empty(&amp;priv-&gt;invalid_list);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static ssize_t ummunotify_read(struct file *filp, char __user *buf,
</span><br>
<span class="quotelev1">&gt; +                              size_t count, loff_t *pos)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +       struct ummunotify_file *priv = filp-&gt;private_data;
</span><br>
<span class="quotelev1">&gt; +       struct ummunotify_reg *reg;
</span><br>
<span class="quotelev1">&gt; +       ssize_t ret;
</span><br>
<span class="quotelev1">&gt; +       struct ummunotify_event *events;
</span><br>
<span class="quotelev1">&gt; +       int max;
</span><br>
<span class="quotelev1">&gt; +       int n;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       priv-&gt;used = 1;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       events = (void *) get_zeroed_page(GFP_KERNEL);
</span><br>
<span class="quotelev1">&gt; +       if (!events) {
</span><br>
<span class="quotelev1">&gt; +               ret = -ENOMEM;
</span><br>
<span class="quotelev1">&gt; +               goto out;
</span><br>
<span class="quotelev1">&gt; +       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       spin_lock_irq(&amp;priv-&gt;lock);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       while (!ummunotify_readable(priv)) {
</span><br>
<span class="quotelev1">&gt; +               spin_unlock_irq(&amp;priv-&gt;lock);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +               if (filp-&gt;f_flags &amp; O_NONBLOCK) {
</span><br>
<span class="quotelev1">&gt; +                       ret = -EAGAIN;
</span><br>
<span class="quotelev1">&gt; +                       goto out;
</span><br>
<span class="quotelev1">&gt; +               }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +               if (wait_event_interruptible(priv-&gt;read_wait,
</span><br>
<span class="quotelev1">&gt; +                                            ummunotify_readable(priv))) {
</span><br>
<span class="quotelev1">&gt; +                       ret = -ERESTARTSYS;
</span><br>
<span class="quotelev1">&gt; +                       goto out;
</span><br>
<span class="quotelev1">&gt; +               }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +               spin_lock_irq(&amp;priv-&gt;lock);
</span><br>
<span class="quotelev1">&gt; +       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       max = min_t(size_t, PAGE_SIZE, count) / sizeof *events;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       for (n = 0; n &lt; max; ++n) {
</span><br>
<span class="quotelev1">&gt; +               if (list_empty(&amp;priv-&gt;invalid_list)) {
</span><br>
<span class="quotelev1">&gt; +                       events[n].type = UMMUNOTIFY_EVENT_TYPE_LAST;
</span><br>
<span class="quotelev1">&gt; +                       events[n].user_cookie_counter = *priv-&gt;counter;
</span><br>
<span class="quotelev1">&gt; +                       ++n;
</span><br>
<span class="quotelev1">&gt; +                       priv-&gt;need_empty = 0;
</span><br>
<span class="quotelev1">&gt; +                       break;
</span><br>
<span class="quotelev1">&gt; +               }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +               reg = list_first_entry(&amp;priv-&gt;invalid_list,
</span><br>
<span class="quotelev1">&gt; +                                      struct ummunotify_reg, list);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +               events[n].type = UMMUNOTIFY_EVENT_TYPE_INVAL;
</span><br>
<span class="quotelev1">&gt; +               if (test_bit(UMMUNOTIFY_FLAG_HINT, &amp;reg-&gt;flags)) {
</span><br>
<span class="quotelev1">&gt; +                       events[n].flags      = UMMUNOTIFY_EVENT_FLAG_HINT;
</span><br>
<span class="quotelev1">&gt; +                       events[n].hint_start = max(reg-&gt;start, reg-&gt;hint_start);
</span><br>
<span class="quotelev1">&gt; +                       events[n].hint_end   = min(reg-&gt;end, reg-&gt;hint_end);
</span><br>
<span class="quotelev1">&gt; +               } else {
</span><br>
<span class="quotelev1">&gt; +                       events[n].hint_start = reg-&gt;start;
</span><br>
<span class="quotelev1">&gt; +                       events[n].hint_end   = reg-&gt;end;
</span><br>
<span class="quotelev1">&gt; +               }
</span><br>
<span class="quotelev1">&gt; +               events[n].user_cookie_counter = reg-&gt;user_cookie;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +               list_del(&amp;reg-&gt;list);
</span><br>
<span class="quotelev1">&gt; +               reg-&gt;flags = 0;
</span><br>
<span class="quotelev1">&gt; +               priv-&gt;need_empty = 1;
</span><br>
<span class="quotelev1">&gt; +       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       spin_unlock_irq(&amp;priv-&gt;lock);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       if (copy_to_user(buf, events, n * sizeof *events))
</span><br>
<span class="quotelev1">&gt; +               ret = -EFAULT;
</span><br>
<span class="quotelev1">&gt; +       else
</span><br>
<span class="quotelev1">&gt; +               ret = n * sizeof *events;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +out:
</span><br>
<span class="quotelev1">&gt; +       free_page((unsigned long) events);
</span><br>
<span class="quotelev1">&gt; +       return ret;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static unsigned int ummunotify_poll(struct file *filp,
</span><br>
<span class="quotelev1">&gt; +                                   struct poll_table_struct *wait)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +       struct ummunotify_file *priv = filp-&gt;private_data;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       poll_wait(filp, &amp;priv-&gt;read_wait, wait);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       return ummunotify_readable(priv) ? (POLLIN | POLLRDNORM) : 0;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static long ummunotify_exchange_features(struct ummunotify_file *priv,
</span><br>
<span class="quotelev1">&gt; +                                        __u32 __user *arg)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +       u32 feature_mask;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       if (priv-&gt;used)
</span><br>
<span class="quotelev1">&gt; +               return -EINVAL;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       priv-&gt;used = 1;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       if (copy_from_user(&amp;feature_mask, arg, sizeof(feature_mask)))
</span><br>
<span class="quotelev1">&gt; +               return -EFAULT;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       /* No extensions defined at present. */
</span><br>
<span class="quotelev1">&gt; +       feature_mask = 0;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       if (copy_to_user(arg, &amp;feature_mask, sizeof(feature_mask)))
</span><br>
<span class="quotelev1">&gt; +               return -EFAULT;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       return 0;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static long ummunotify_register_region(struct ummunotify_file *priv,
</span><br>
<span class="quotelev1">&gt; +                                      void __user *arg)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +       struct ummunotify_register_ioctl parm;
</span><br>
<span class="quotelev1">&gt; +       struct ummunotify_reg *reg, *treg;
</span><br>
<span class="quotelev1">&gt; +       struct rb_node **n = &amp;priv-&gt;reg_tree.rb_node;
</span><br>
<span class="quotelev1">&gt; +       struct rb_node *pn;
</span><br>
<span class="quotelev1">&gt; +       int ret = 0;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       if (copy_from_user(&amp;parm, arg, sizeof parm))
</span><br>
<span class="quotelev1">&gt; +               return -EFAULT;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       priv-&gt;used = 1;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       reg = kmalloc(sizeof *reg, GFP_KERNEL);
</span><br>
<span class="quotelev1">&gt; +       if (!reg)
</span><br>
<span class="quotelev1">&gt; +               return -ENOMEM;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       reg-&gt;user_cookie        = parm.user_cookie;
</span><br>
<span class="quotelev1">&gt; +       reg-&gt;start              = parm.start;
</span><br>
<span class="quotelev1">&gt; +       reg-&gt;end                = parm.end;
</span><br>
<span class="quotelev1">&gt; +       reg-&gt;flags              = 0;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       spin_lock_irq(&amp;priv-&gt;lock);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       for (pn = rb_first(&amp;priv-&gt;reg_tree); pn; pn = rb_next(pn)) {
</span><br>
<span class="quotelev1">&gt; +               treg = rb_entry(pn, struct ummunotify_reg, node);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +               if (treg-&gt;user_cookie == parm.user_cookie) {
</span><br>
<span class="quotelev1">&gt; +                       kfree(reg);
</span><br>
<span class="quotelev1">&gt; +                       ret = -EINVAL;
</span><br>
<span class="quotelev1">&gt; +                       goto out;
</span><br>
<span class="quotelev1">&gt; +               }
</span><br>
<span class="quotelev1">&gt; +       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       pn = NULL;
</span><br>
<span class="quotelev1">&gt; +       while (*n) {
</span><br>
<span class="quotelev1">&gt; +               pn = *n;
</span><br>
<span class="quotelev1">&gt; +               treg = rb_entry(pn, struct ummunotify_reg, node);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +               if (reg-&gt;start &lt;= treg-&gt;start)
</span><br>
<span class="quotelev1">&gt; +                       n = &amp;pn-&gt;rb_left;
</span><br>
<span class="quotelev1">&gt; +               else
</span><br>
<span class="quotelev1">&gt; +                       n = &amp;pn-&gt;rb_right;
</span><br>
<span class="quotelev1">&gt; +       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       rb_link_node(&amp;reg-&gt;node, pn, n);
</span><br>
<span class="quotelev1">&gt; +       rb_insert_color(&amp;reg-&gt;node, &amp;priv-&gt;reg_tree);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +out:
</span><br>
<span class="quotelev1">&gt; +       spin_unlock_irq(&amp;priv-&gt;lock);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       return ret;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static long ummunotify_unregister_region(struct ummunotify_file *priv,
</span><br>
<span class="quotelev1">&gt; +                                        __u64 __user *arg)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +       u64 user_cookie;
</span><br>
<span class="quotelev1">&gt; +       struct rb_node *n;
</span><br>
<span class="quotelev1">&gt; +       struct ummunotify_reg *reg;
</span><br>
<span class="quotelev1">&gt; +       int ret = -EINVAL;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       if (copy_from_user(&amp;user_cookie, arg, sizeof(user_cookie)))
</span><br>
<span class="quotelev1">&gt; +               return -EFAULT;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       spin_lock_irq(&amp;priv-&gt;lock);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       for (n = rb_first(&amp;priv-&gt;reg_tree); n; n = rb_next(n)) {
</span><br>
<span class="quotelev1">&gt; +               reg = rb_entry(n, struct ummunotify_reg, node);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +               if (reg-&gt;user_cookie == user_cookie) {
</span><br>
<span class="quotelev1">&gt; +                       rb_erase(n, &amp;priv-&gt;reg_tree);
</span><br>
<span class="quotelev1">&gt; +                       if (test_bit(UMMUNOTIFY_FLAG_INVALID, &amp;reg-&gt;flags))
</span><br>
<span class="quotelev1">&gt; +                               list_del(&amp;reg-&gt;list);
</span><br>
<span class="quotelev1">&gt; +                       kfree(reg);
</span><br>
<span class="quotelev1">&gt; +                       ret = 0;
</span><br>
<span class="quotelev1">&gt; +                       break;
</span><br>
<span class="quotelev1">&gt; +               }
</span><br>
<span class="quotelev1">&gt; +       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       spin_unlock_irq(&amp;priv-&gt;lock);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       return ret;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static long ummunotify_ioctl(struct file *filp, unsigned int cmd,
</span><br>
<span class="quotelev1">&gt; +                            unsigned long arg)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +       struct ummunotify_file *priv = filp-&gt;private_data;
</span><br>
<span class="quotelev1">&gt; +       void __user *argp = (void __user *) arg;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       switch (cmd) {
</span><br>
<span class="quotelev1">&gt; +       case UMMUNOTIFY_EXCHANGE_FEATURES:
</span><br>
<span class="quotelev1">&gt; +               return ummunotify_exchange_features(priv, argp);
</span><br>
<span class="quotelev1">&gt; +       case UMMUNOTIFY_REGISTER_REGION:
</span><br>
<span class="quotelev1">&gt; +               return ummunotify_register_region(priv, argp);
</span><br>
<span class="quotelev1">&gt; +       case UMMUNOTIFY_UNREGISTER_REGION:
</span><br>
<span class="quotelev1">&gt; +               return ummunotify_unregister_region(priv, argp);
</span><br>
<span class="quotelev1">&gt; +       default:
</span><br>
<span class="quotelev1">&gt; +               return -ENOIOCTLCMD;
</span><br>
<span class="quotelev1">&gt; +       }
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static int ummunotify_fault(struct vm_area_struct *vma, struct vm_fault *vmf)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +       struct ummunotify_file *priv = vma-&gt;vm_private_data;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       if (vmf-&gt;pgoff != 0)
</span><br>
<span class="quotelev1">&gt; +               return VM_FAULT_SIGBUS;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       vmf-&gt;page = virt_to_page(priv-&gt;counter);
</span><br>
<span class="quotelev1">&gt; +       get_page(vmf-&gt;page);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       return 0;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static struct vm_operations_struct ummunotify_vm_ops = {
</span><br>
<span class="quotelev1">&gt; +       .fault          = ummunotify_fault,
</span><br>
<span class="quotelev1">&gt; +};
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static int ummunotify_mmap(struct file *filp, struct vm_area_struct *vma)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +       struct ummunotify_file *priv = filp-&gt;private_data;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       if (vma-&gt;vm_end - vma-&gt;vm_start != PAGE_SIZE || vma-&gt;vm_pgoff != 0)
</span><br>
<span class="quotelev1">&gt; +               return -EINVAL;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       vma-&gt;vm_ops             = &amp;ummunotify_vm_ops;
</span><br>
<span class="quotelev1">&gt; +       vma-&gt;vm_private_data    = priv;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       return 0;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static int ummunotify_fasync(int fd, struct file *filp, int on)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +       struct ummunotify_file *priv = filp-&gt;private_data;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       return fasync_helper(fd, filp, on, &amp;priv-&gt;async_queue);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static const struct file_operations ummunotify_fops = {
</span><br>
<span class="quotelev1">&gt; +       .owner          = THIS_MODULE,
</span><br>
<span class="quotelev1">&gt; +       .open           = ummunotify_open,
</span><br>
<span class="quotelev1">&gt; +       .release        = ummunotify_close,
</span><br>
<span class="quotelev1">&gt; +       .read           = ummunotify_read,
</span><br>
<span class="quotelev1">&gt; +       .poll           = ummunotify_poll,
</span><br>
<span class="quotelev1">&gt; +       .unlocked_ioctl = ummunotify_ioctl,
</span><br>
<span class="quotelev1">&gt; +#ifdef CONFIG_COMPAT
</span><br>
<span class="quotelev1">&gt; +       .compat_ioctl   = ummunotify_ioctl,
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +       .mmap           = ummunotify_mmap,
</span><br>
<span class="quotelev1">&gt; +       .fasync         = ummunotify_fasync,
</span><br>
<span class="quotelev1">&gt; +};
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static struct miscdevice ummunotify_misc = {
</span><br>
<span class="quotelev1">&gt; +       .minor  = MISC_DYNAMIC_MINOR,
</span><br>
<span class="quotelev1">&gt; +       .name   = &quot;ummunotify&quot;,
</span><br>
<span class="quotelev1">&gt; +       .fops   = &amp;ummunotify_fops,
</span><br>
<span class="quotelev1">&gt; +};
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static int __init ummunotify_init(void)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +       return misc_register(&amp;ummunotify_misc);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static void __exit ummunotify_cleanup(void)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +       misc_deregister(&amp;ummunotify_misc);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +module_init(ummunotify_init);
</span><br>
<span class="quotelev1">&gt; +module_exit(ummunotify_cleanup);
</span><br>
<span class="quotelev1">&gt; diff -puN include/linux/Kbuild~ummunotify-userspace-support-for-mmu-notifications-v2 include/linux/Kbuild
</span><br>
<span class="quotelev1">&gt; --- a/include/linux/Kbuild~ummunotify-userspace-support-for-mmu-notifications-v2
</span><br>
<span class="quotelev1">&gt; +++ a/include/linux/Kbuild
</span><br>
<span class="quotelev1">&gt; @@ -164,6 +164,7 @@ header-y += tipc_config.h
</span><br>
<span class="quotelev1">&gt;  header-y += toshiba.h
</span><br>
<span class="quotelev1">&gt;  header-y += udf_fs_i.h
</span><br>
<span class="quotelev1">&gt;  header-y += ultrasound.h
</span><br>
<span class="quotelev1">&gt; +header-y += ummunotify.h
</span><br>
<span class="quotelev1">&gt;  header-y += un.h
</span><br>
<span class="quotelev1">&gt;  header-y += utime.h
</span><br>
<span class="quotelev1">&gt;  header-y += veth.h
</span><br>
<span class="quotelev1">&gt; diff -puN /dev/null include/linux/ummunotify.h
</span><br>
<span class="quotelev1">&gt; --- /dev/null
</span><br>
<span class="quotelev1">&gt; +++ a/include/linux/ummunotify.h
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,121 @@
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2009 Cisco Systems.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * This program is free software; you can redistribute it and/or
</span><br>
<span class="quotelev1">&gt; + * modify it under the terms of the GNU General Public License version
</span><br>
<span class="quotelev1">&gt; + * 2 as published by the Free Software Foundation.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * THE SOFTWARE IS PROVIDED &quot;AS IS&quot;, WITHOUT WARRANTY OF ANY KIND,
</span><br>
<span class="quotelev1">&gt; + * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
</span><br>
<span class="quotelev1">&gt; + * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
</span><br>
<span class="quotelev1">&gt; + * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS
</span><br>
<span class="quotelev1">&gt; + * BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
</span><br>
<span class="quotelev1">&gt; + * ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
</span><br>
<span class="quotelev1">&gt; + * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
</span><br>
<span class="quotelev1">&gt; + * SOFTWARE.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#ifndef _LINUX_UMMUNOTIFY_H
</span><br>
<span class="quotelev1">&gt; +#define _LINUX_UMMUNOTIFY_H
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#include &lt;linux/types.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;linux/ioctl.h&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * Ummunotify relays MMU notifier events to userspace.  A userspace
</span><br>
<span class="quotelev1">&gt; + * process uses it by opening /dev/ummunotify, which returns a file
</span><br>
<span class="quotelev1">&gt; + * descriptor.  Interest in address ranges is registered using ioctl()
</span><br>
<span class="quotelev1">&gt; + * and MMU notifier events are retrieved using read(), as described in
</span><br>
<span class="quotelev1">&gt; + * more detail below.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * Userspace can also mmap() a single read-only page at offset 0 on
</span><br>
<span class="quotelev1">&gt; + * this file descriptor.  This page contains (at offest 0) a single
</span><br>
<span class="quotelev1">&gt; + * 64-bit generation counter that the kernel increments each time an
</span><br>
<span class="quotelev1">&gt; + * MMU notifier event occurs.  Userspace can use this to very quickly
</span><br>
<span class="quotelev1">&gt; + * check if there are any events to retrieve without needing to do a
</span><br>
<span class="quotelev1">&gt; + * system call.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * struct ummunotify_register_ioctl describes an address range from
</span><br>
<span class="quotelev1">&gt; + * start to end (including start but not including end) to be
</span><br>
<span class="quotelev1">&gt; + * monitored.  user_cookie is an opaque handle that userspace assigns,
</span><br>
<span class="quotelev1">&gt; + * and which is used to unregister.  flags and reserved are currently
</span><br>
<span class="quotelev1">&gt; + * unused and should be set to 0 for forward compatibility.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +struct ummunotify_register_ioctl {
</span><br>
<span class="quotelev1">&gt; +       __u64   start;
</span><br>
<span class="quotelev1">&gt; +       __u64   end;
</span><br>
<span class="quotelev1">&gt; +       __u64   user_cookie;
</span><br>
<span class="quotelev1">&gt; +       __u32   flags;
</span><br>
<span class="quotelev1">&gt; +       __u32   reserved;
</span><br>
<span class="quotelev1">&gt; +};
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#define UMMUNOTIFY_MAGIC               'U'
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * Forward compatibility: Userspace passes in a 32-bit feature mask
</span><br>
<span class="quotelev1">&gt; + * with feature flags set indicating which extensions it wishes to
</span><br>
<span class="quotelev1">&gt; + * use.  The kernel will return a feature mask with the bits of
</span><br>
<span class="quotelev1">&gt; + * userspace's mask that the kernel implements; from that point on
</span><br>
<span class="quotelev1">&gt; + * both userspace and the kernel should behave as described by the
</span><br>
<span class="quotelev1">&gt; + * kernel's feature mask.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * If userspace does not perform a UMMUNOTIFY_EXCHANGE_FEATURES ioctl,
</span><br>
<span class="quotelev1">&gt; + * then the kernel will use a feature mask of 0.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * No feature flags are currently defined, so the kernel will always
</span><br>
<span class="quotelev1">&gt; + * return a feature mask of 0 at present.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +#define UMMUNOTIFY_EXCHANGE_FEATURES   _IOWR(UMMUNOTIFY_MAGIC, 1, __u32)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * Register interest in an address range; userspace should pass in a
</span><br>
<span class="quotelev1">&gt; + * struct ummunotify_register_ioctl describing the region.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +#define UMMUNOTIFY_REGISTER_REGION     _IOW(UMMUNOTIFY_MAGIC, 2, \
</span><br>
<span class="quotelev1">&gt; +                                            struct ummunotify_register_ioctl)
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * Unregister interest in an address range; userspace should pass in
</span><br>
<span class="quotelev1">&gt; + * the user_cookie value that was used to register the address range.
</span><br>
<span class="quotelev1">&gt; + * No events for the address range will be reported once it is
</span><br>
<span class="quotelev1">&gt; + * unregistered.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +#define UMMUNOTIFY_UNREGISTER_REGION   _IOW(UMMUNOTIFY_MAGIC, 3, __u64)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * Invalidation events are returned whenever the kernel changes the
</span><br>
<span class="quotelev1">&gt; + * mapping for a monitored address.  These events are retrieved by
</span><br>
<span class="quotelev1">&gt; + * read() on the ummunotify file descriptor, which will fill the
</span><br>
<span class="quotelev1">&gt; + * read() buffer with struct ummunotify_event.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * If type field is INVAL, then user_cookie_counter holds the
</span><br>
<span class="quotelev1">&gt; + * user_cookie for the region being reported; if the HINT flag is set
</span><br>
<span class="quotelev1">&gt; + * then hint_start/hint_end hold the start and end of the mapping that
</span><br>
<span class="quotelev1">&gt; + * was invalidated.  (If HINT is not set, then multiple events
</span><br>
<span class="quotelev1">&gt; + * invalidated parts of the registered range and hint_start/hint_end
</span><br>
<span class="quotelev1">&gt; + * and set to the start/end of the whole registered range)
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * If type is LAST, then the read operation has emptied the list of
</span><br>
<span class="quotelev1">&gt; + * invalidated regions, and user_cookie_counter holds the value of the
</span><br>
<span class="quotelev1">&gt; + * kernel's generation counter when the empty list occurred.  The
</span><br>
<span class="quotelev1">&gt; + * other fields are not filled in for this event.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +enum {
</span><br>
<span class="quotelev1">&gt; +       UMMUNOTIFY_EVENT_TYPE_INVAL     = 0,
</span><br>
<span class="quotelev1">&gt; +       UMMUNOTIFY_EVENT_TYPE_LAST      = 1,
</span><br>
<span class="quotelev1">&gt; +};
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +enum {
</span><br>
<span class="quotelev1">&gt; +       UMMUNOTIFY_EVENT_FLAG_HINT      = 1 &lt;&lt; 0,
</span><br>
<span class="quotelev1">&gt; +};
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +struct ummunotify_event {
</span><br>
<span class="quotelev1">&gt; +       __u32   type;
</span><br>
<span class="quotelev1">&gt; +       __u32   flags;
</span><br>
<span class="quotelev1">&gt; +       __u64   hint_start;
</span><br>
<span class="quotelev1">&gt; +       __u64   hint_end;
</span><br>
<span class="quotelev1">&gt; +       __u64   user_cookie_counter;
</span><br>
<span class="quotelev1">&gt; +};
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#endif /* _LINUX_UMMUNOTIFY_H */
</span><br>
<span class="quotelev1">&gt; _
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Patches currently in -mm which might be from rolandd_at_[hidden] are
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linux-next.patch
</span><br>
<span class="quotelev1">&gt; ummunotify-userspace-support-for-mmu-notifications-v2.patch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7912.php">Roland Dreier: "Re: [OMPI devel] Fwd: + ummunotify-userspace-support-for-mmu-notifications-v2.patch added to -mm tree"</a>
<li><strong>Previous message:</strong> <a href="7910.php">Ralf Wildenhues: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7912.php">Roland Dreier: "Re: [OMPI devel] Fwd: + ummunotify-userspace-support-for-mmu-notifications-v2.patch added to -mm tree"</a>
<li><strong>Reply:</strong> <a href="7912.php">Roland Dreier: "Re: [OMPI devel] Fwd: + ummunotify-userspace-support-for-mmu-notifications-v2.patch added to -mm tree"</a>
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
