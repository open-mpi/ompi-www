<?php
$topdir = "../..";
$title = "Portable Hardware Locality (hwloc)";
include_once("$topdir/software/hwloc/current/version.inc");
include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/curl_get.inc");
?>

<p><strong>The Portable Hardware Locality (hwloc) software is
distributed under the <?php
print("<a href=\"http://www.opensource.org/licenses/bsd-license.php\">");
?>New BSD license</a>, listed below.</strong>

<?php
# JMS Somehow the curl get from github doesn't work reliably :(
#$str = do_curl_get("https://raw.github.com/open-mpi/hwloc/master/COPYING");
#print("<p><hr>\n<pre>\n$str\n</pre><p><hr>\n\n");
?>
<pre>
Copyright © 2009 CNRS
Copyright © 2009 inria.  All rights reserved.
Copyright © 2009 Université Bordeaux 1
Copyright © 2009 Cisco Systems, Inc.  All rights reserved.
Copyright © 2012 Blue Brain Project, EPFL. All rights reserved.
See COPYING in top-level directory.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions
are met:
1. Redistributions of source code must retain the above copyright
   notice, this list of conditions and the following disclaimer.
2. Redistributions in binary form must reproduce the above copyright
   notice, this list of conditions and the following disclaimer in the
   documentation and/or other materials provided with the distribution.
3. The name of the author may not be used to endorse or promote products
   derived from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE AUTHOR ``AS IS'' AND ANY EXPRESS OR
IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT,
INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF
THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
</pre>
<?php
include_once("$topdir/includes/footer.inc");
