<?
$subject_val = "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network locking server";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 17:19:02 2009" -->
<!-- isoreceived="20091106221902" -->
<!-- sent="Fri, 6 Nov 2009 17:18:56 -0500" -->
<!-- isosent="20091106221856" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] [MTT bugs] [MTT] #212: Generic network locking server" -->
<!-- id="20091106221856.GF53339_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="053.a051d7750caa23e9b0a0c3b44b5e1094_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [MTT users] [MTT bugs] [MTT] #212: Generic network locking server<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-06 17:18:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0700.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network lockingserver"</a>
<li><strong>Previous message:</strong> <a href="0698.php">Jeff Squyres: "Re: [MTT users] autogen.sh in svn_post_export"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0700.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network lockingserver"</a>
<li><strong>Reply:</strong> <a href="0700.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network lockingserver"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Mar/05/2007 09:42:53PM, MTT wrote:
<br>
<span class="quotelev1">&gt; #212: Generic network locking server
</span><br>
<span class="quotelev1">&gt; ------------------------------------------+---------------------------------
</span><br>
<span class="quotelev1">&gt;   Reporter:  jsquyres                     |       Owner:  jsquyres
</span><br>
<span class="quotelev1">&gt;       Type:  defect                       |      Status:  closed  
</span><br>
<span class="quotelev1">&gt;   Priority:  major                        |   Milestone:  v2.0.2  
</span><br>
<span class="quotelev1">&gt;  Component:  Both client and server side  |     Version:  trunk   
</span><br>
<span class="quotelev1">&gt; Resolution:  fixed                        |    Keywords:          
</span><br>
<span class="quotelev1">&gt; ------------------------------------------+---------------------------------
</span><br>
<span class="quotelev1">&gt; Changes (by jsquyres):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   * status:  new =&gt; closed
</span><br>
<span class="quotelev1">&gt;   * resolution:  =&gt; fixed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Comment:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  (In [642]) Fixes #211, #212
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   * Implement new fields in the INI file [MTT] section for specifying a
</span><br>
<span class="quotelev1">&gt;     comma-delimited list of proxies to use for HTTP/FTP downloads, the
</span><br>
<span class="quotelev1">&gt;     SVN module, and
</span><br>
<span class="quotelev1">&gt;     * '''http_proxy''': URL for HTTP proxying (to include proper method
</span><br>
<span class="quotelev1">&gt;       prefix, such as &quot;!http://&quot;)
</span><br>
<span class="quotelev1">&gt;     * '''https_proxy''': Ditto for HTTPS proxying
</span><br>
<span class="quotelev1">&gt;     * '''ftp_proxy''': Ditto for FTP proxying
</span><br>
<span class="quotelev1">&gt;   * This ended up ''requiring'' a proper locking solution (see below).
</span><br>
<span class="quotelev1">&gt;   * Implemented MTT::Lock framework to allow arbitrary
</span><br>
<span class="quotelev1">&gt;     locking/unlocking by string name (typically a filename).  A new
</span><br>
<span class="quotelev1">&gt;     optional &quot;[lock]&quot; section now exists in the INI file.  If
</span><br>
<span class="quotelev1">&gt;     unspecified, all locks/unlocks are no-ops.
</span><br>
<span class="quotelev1">&gt;     * Just like other sections, you must specify a &quot;module=&lt;foo&gt;&quot; line
</span><br>
<span class="quotelev1">&gt;       in the [lock] section to specify which module is used to implement
</span><br>
<span class="quotelev1">&gt;       the locks.
</span><br>
<span class="quotelev1">&gt;     * One module currently exists in this framework: MTTLockServer.
</span><br>
<span class="quotelev1">&gt;       It takes 2 parameters: mttlockserver_host and
</span><br>
<span class="quotelev1">&gt;       mttlockserver_port.  Example:
</span><br>
<span class="quotelev1">&gt;  {{{
</span><br>
<span class="quotelev1">&gt;  [Lock]
</span><br>
<span class="quotelev1">&gt;  module = MTTLockServer
</span><br>
<span class="quotelev1">&gt;  mttlockserver_host = my-lock-server.example.com
</span><br>
<span class="quotelev1">&gt;  mttlockserver_port = 12345
</span><br>
<span class="quotelev1">&gt;  }}}
</span><br>
<span class="quotelev1">&gt;   * Fixups from r640 to bring the mtt-lock-server online
</span><br>
<span class="quotelev1">&gt;   * The mtt-lock-server is currently in client/, but may move someday.
</span><br>
<span class="quotelev1">&gt;     It takes a few parameters when launched:
</span><br>
<span class="quotelev1">&gt;     * '''-f''': To run it in the foreground (default is to daemonize).
</span><br>
<span class="quotelev1">&gt;     * '''-p''': port number to listen on
</span><br>
<span class="quotelev1">&gt;     * '''-s''': log to syslog
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Typically, you run a single mtt-lock-server for your cluster and then
</span><br>
<span class="quotelev1">&gt;  go run as many MTT's as you want.  The lock server will enforce
</span><br>
<span class="quotelev1">&gt;  serialization where necessary.
</span><br>
<p>I'm running multiple MTT clients out of the same scratch directory
<br>
using SGE. I'm running into race conditions between the multiple
<br>
clients, where one client is overwriting another's data in the .dump
<br>
files - which is a Very Bad Thing(tm). I'm running the
<br>
client/mtt-lock-server, and I've added the corresponding [Lock]
<br>
section in my INI file. Will my MTT clients now not interfere with
<br>
each other's .dump files? I'm skeptical of this because I don't see,
<br>
e.g., Lock() calls in SaveRuns(). How do I make my .dump files safe?
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  '''NOTE:''' The SVN module ''must'' have a locking module if multiple
</span><br>
<span class="quotelev1">&gt;  MTT's are going to be running simultaneously with a proxy, due to the
</span><br>
<span class="quotelev1">&gt;  fact that SVN will only use the file $HOME/.subversion/servers to find
</span><br>
<span class="quotelev1">&gt;  where its proxy server is located.  Hence, MTT will lock that file,
</span><br>
<span class="quotelev1">&gt;  set the proxy, do the SVN checkout/export, restore the file, and then
</span><br>
<span class="quotelev1">&gt;  unlock it.  If locking is not used, mutliple MTT clients could stop on
</span><br>
<span class="quotelev1">&gt;  the &quot;servers&quot; file simultaneously and Bad Things(tm) could happen.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/mtt/ticket/212#comment:7">https://svn.open-mpi.org/trac/mtt/ticket/212#comment:7</a>&gt;
</span><br>
<span class="quotelev1">&gt; MTT &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev1">&gt; Issue tracking for the MPI Testing Tool.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0700.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network lockingserver"</a>
<li><strong>Previous message:</strong> <a href="0698.php">Jeff Squyres: "Re: [MTT users] autogen.sh in svn_post_export"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0700.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network lockingserver"</a>
<li><strong>Reply:</strong> <a href="0700.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network lockingserver"</a>
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
